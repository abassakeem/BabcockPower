<?php 
include 'php includes/parseReceipt.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="shortcut icon" href="../abass project images/Screenshot (92).png">
    <!--start of bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--end of  bootstrap css -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/receipt.css">
    <link rel="stylesheet" href="../css/print.css" media="print">
     <!-- start of fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">
     <!-- end of fonts -->
</head>
<body>
    
<?php
                while($row = $statement->fetch(PDO::FETCH_ASSOC) ){ ?>
<div class="page-content container">
    <div class="page-header text-blue-d2">
        <h1 class="page-title text-secondary-d1">
            
            <small class="page-info">
                <i class="fa fa-angle-double-right text-80"></i>
                USER ID: <?php echo $row['users_id'];  ?>
            </small>
        </h1>

        <div class="page-tools">
            <div class="action-buttons">
                <!-- <a class="print btn bg-white btn-outline-dark " href="print.php?reference=<?php echo $row['reference'];  ?>" data-title="Print">
                    <i class="mr-1 fa fa-print text-dark"></i>
                    
                    Print
                </a> -->
                <button class="print btn bg-white btn-outline-dark " onclick = "window.print();" id="print-btn" data-title="Print">
                    <i class="mr-1 fa fa-print text-dark"></i>
                    
                    Print
                </button>
                
            </div>
        </div>
    </div>

    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                            
                            <p class="navbar-brand sign-in-logo">BU-Power</p>
                        </div>
                    </div>
                </div>
                <!-- .row -->

                <hr class="row brc-default-l1 mx-n1 mb-4" />

                <div class="row">
                    <div class="col-sm-6">
                        
                        <div class="text-grey-m2">
                            <div class="my-1">
                                Street, City
                            </div>
                            <div class="my-1">
                                User ID
                            </div>
                            <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600"><?php echo $row['users_id'];  ?></b></div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Invoice
                            </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="">Refrence:</span> <?php echo $row['reference'];  ?></div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="">Issue Date:</span> <?php echo $row['date_purchased'];  ?></div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="">Status: </span><?php echo $row['statuses'];  ?> <span class="badge badge-warning badge-pill px-25"><?php echo $row['statuses'];  ?></span></div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                    
            <div class="table-responsive mt-2">
                <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                    <thead class="bg-none bgc-default-tp1">
                        <tr class="text-light bg-primary">
                            <th class="opacity-2">#</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th width="140">Amount</th>
                        </tr>
                    </thead>

                    <tbody class="text-95 text-secondary-d3">
                        <tr></tr>
                        <tr>
                            <td>1</td>
                            <td>payment</td>
                            <td><?php echo $row['amount'];  ?></td>
                            <td class="text-95"><?php echo $row['amount'];  ?></td>
                            <td class="text-secondary-d2"><?php echo $row['amount'];  ?></td>
                        </tr> 
                        
                    </tbody>
                </table>
            </div>
            

                   

                    <hr />
                    <?php } ?>

                    
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>