<?php
$page1 = "dashboard.php";
include 'php includes/header.php';
include 'php includes/parseWattPrice.php';

include 'php includes/parseDashboard.php';
include 'php includes/parseDashboardTransactionHistory.php';
include 'php includes/parseDashboardTransactionHistory.php';
include 'php includes/parseBill.php';
include 'php includes/parsePriceHistory.php';
  ?>
  <div aria-live="polite" aria-atomic="true" class="bg-dark position-relative bd-example-toasts">
  <div class="toast-container position-absolute p-3" id="toastPlacement">
    
  </div>
</div>

            <section class="dashboard-section2 ">
                <div class="container container2 ">
                    <div class="row align-items-start">
                    <?php if(!isset($_SESSION['meterid'])): ?>
            <h3 class="text-center help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
                <div class="col-sm-12 text-center justify-content-center align-items-start">
                    <?php 
                                    while ($rs = $stmt1->fetch(PDO::FETCH_ASSOC)){ 
                                        if ($rs['active_bill'] == "1"){
                                        ?> <a class="btn btn-outline-danger text-secondary" href="make payment.php"><h5><img class="" src="../abass svg for project/bell.svg"> <?php
                                            echo "YOU ARE TO PAY &#x20A6" ?> <?php echo $rs['bill_price'];
                                            } 
                                            else{
                                                
                                            }
                                        }
                                ?></h5></a>
                                
                </div>
                
                        <div class="col-sm-8 name-container  mb-5">
                            <div class="row align-items-start">
                                <div class="container col-sm-12">
                                    <div class="container text-">
                                       <div class="col-sm-12 customer-details ">
                                    <h4><span class="text-secondary text-center  mb-5 welcome">
                                        Welcome:<br></span></h4>


                                   
                                    <h2><span class="user-name"> <?php if(isset($name)) echo $name;  ?></span></h2>
                                   
                                    <a href="myprofile.php" class="update-details text-center ">UPDATE DETAILS</a>
                                </div>
                                        </div>
                                </div>
                               
                            </div>
                          
                            
                        <div class="bottom-region1 mt-5 d-flex g-2 gap-2 text-align-left justify-content-between align-items-center">
                        <div class="">
                            <div class="box-1 box d-flex justify-content-between gap-5 align-items-center">
                            <div>
                                        <h4> User ID </h4>
                                        <p><?php if(isset($users_id)){ echo $users_id;} ?></p>
                                        <a href="make payment.php" class="d-btn">PAY </a>
                                        
                                    </div>
                                    <div class=""><ion-icon name="person-outline" class="ion-icon"></ion-icon></div>
                            </div>
                            <div class="box-2 box d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Last Payment</h4>
                                <p><?php
                                    while($row = $statement->fetch(PDO::FETCH_ASSOC) ){ ?>
                                    <span><?php echo $row['date_purchased']  ?></p>
                                    <a href="payment statement.php" class="d-btn">View </a>
                                </p>
                                </div>
                                <div class=""><ion-icon name="wallet-outline" class="ion-icon"></ion-icon></div>
                            </div>

                        </div> 
                        <div class="">

                             <div class="box-3 box d-flex justify-content-betweeen align-items-center">
                            <div>

                                <h4>Last Transaction</h4>
                                <p>
                                <span>&#8358;<?php echo $row['amount'];  ?></span>
                               
                                </p>
                                <a href="transaction history.php" class="d-btn">View </a>
                            </div>
                            <div class=""><ion-icon name="cash-outline" class="ion-icon"></ion-icon></div>

                            </div>
                             <div class="box-3 box d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Latest Reciept</h4>
                                <p>
                                <span>&#8358;<?php echo $row['amount'];  ?></span>
                                <?php } ?>
                                </p>
                                <a href="transaction history.php" class="d-btn">Print </a>
                            </div>
                            <div class=""><ion-icon name="receipt-outline" class="ion-icon"></ion-icon></div>
                            </div>
                           
                           
                        </div>   
                        
                           
                        </div>
                        </div>
                        <div class="container col-sm-4 price-box pt-3   mb-5 align-items-center justify-content-center">
                        <div class="glow-container mb-5 p-4">
                            <div class="g">
                                <br>
                                




<div class="">
             <h1 class="price-per-watt text-dark text-center">&#8358
                                    <?php 
                                    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)){ 
                                        echo $rs['price'];
                                        }
                                ?>
                                </h1> 

                                <p class="text-center text-dark  mt-3">Price per Unit</p>

                               <h6>History</h6>
                               <div class="d-flex flex-row justify-content-between align-items-center p-2 ">
                                                  
                                                <h6>Price per Units</h6>      
                                                <h6>Date</h6>    
                                        </div>
                                <?php
                                        while($rowss = $statementss->fetch(PDO::FETCH_ASSOC) ){ ?>
                                        
                                        <div class="d-flex flex-row justify-content-between align-items-center p-2 price-history">
                                                  
                                                <p><b><?php echo $rowss['price'];  ?></b></p>      
                                                <p><?php echo $rowss['created_at'];  ?></p>    
                                        </div>
                                        <?php } ?>

             </div>
</div>                      
                          
                    </div>
                    
                </div>
             </section> 
             </div>
             
            
                           
                        </div>
       
             <?php endif ?>
    </div>
    <script>
        $ (function(){
            $('.toast').toast('show');
        });
        </script>
        <script>
const boxes = document.querySelectorAll('.box1, .box2, .box3');

for (const box of boxes) {
  box.addEventListener('click', function handleClick() {
    box.classList.add('active');
  });
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>        
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>   
  <?php include 'php includes/footer.php'?>