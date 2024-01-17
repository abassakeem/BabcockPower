<?php
$page1 = "dashboard.php";
include 'php includes/header.php';
include 'php includes/parseWattPrice.php';

include 'php includes/parseDashboard.php';
include 'php includes/parseDashboardTransactionHistory.php';
include 'php includes/parseDashboardTransactionHistory.php';
include 'php includes/parseBill.php';

  ?>
  <div aria-live="polite" aria-atomic="true" class="bg-dark position-relative bd-example-toasts">
  <div class="toast-container position-absolute p-3" id="toastPlacement">
    
  </div>
</div>

            <section class="dashboard-section2 py-5">
                <div class="container container2 mt-5">
                    <div class="row align-items-center">
                    <?php if(!isset($_SESSION['meterid'])): ?>
            <h3 class="text-center help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
                <div class="col-sm-12 text-center">
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
                        <div class="col-sm-6 text-center mb-5">
                            <div class="row align-items-center">
                                <div class="container col-sm-12">
                                    <div class="container ">
                                       <div class="col-sm-12 customer-details">
                                    <h4><span class="text-secondary mt-5 mb-5 welcome">
                                        Welcome:<br></span></h4>


                                   
                                    <h2><span class="user-name"> <?php if(isset($name)) echo $name;  ?></span></h2>
                                   
                                    <a href="myprofile.php" class="update-details">UPDATE DETAILS</a>
                                </div>
                                        </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="container col-sm-6  mt-3 mb-5 align-items-center justify-content-center">
                        <div class="glow-container mb-5 p-4">
                            <div class="g">
                                <br>
                                
                                <div class="circles">
  <div class="circle circle-1"></div>
  <div class="circle circle-2"></div>
</div>

<div class="card-group">
  <div class="card">
    <div class="logo d-flex justify-content-end px-5 pt-5">Babcock Power</div>
    <div class="chip">
    <div class="">
             <h1 class="price-per-watt text-dark text-center">
                                    <?php 
                                    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)){ 
                                        echo $rs['price'];
                                        }
                                ?>
                                </h1> 
                                <p class="text-center text-dark  mt-3">Price per Unit</p>
             </div>
    </div>
    <div class="number" title="User ID"><?php if(isset($users_id)){ echo $users_id;} ?></div>
    <div class="name"> <?php if(isset($name)) echo $name;  ?></div>
    <div class="from">10/19</div>
    <div class="to">06/21</div>
    <div class="ring"></div>
  </div>
</div>
                                
                          
                    </div>
                    
                </div>
             </section> 
             </div>
            
                           
                        </div>
             <section class="dashboard-section3 text-center">
                 <div class="container container3 mt-3">
                     <div class="row g-1">
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div>
                                        <h4> User ID </h4>
                                        <p><?php if(isset($users_id)){ echo $users_id;} ?></p>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <h4>Last Payment</h4>
                                <p><?php
                                    while($row = $statement->fetch(PDO::FETCH_ASSOC) ){ ?>
                                    <span><?php echo $row['date_purchased']  ?></p>
                                </p>
                                </div>
                            
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <h4>Last Transaction</h4>
                                <p>
                                <span>&#8358;<?php echo $row['amount'];  ?></span>
                                <?php } ?>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                 </div>
             </section>
             <section class="dashboard-section4  text-center">
                 <div class="container container4 ">
                     <div class="row ">
                        <div class="col-sm-4">
                            <div>
                                <a href="make payment.php">PAY NOW</a>
                            </div>
                            
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <a href="payment statement.php">VIEW ALL PAYMENT STATEMENTS</a>
                            </div>
                            
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <a href="transaction history.php">VIEW ALL TRANSACTIONS</a>
                            </div>
                            
                        </div>
                        
                    </div>
                 </div>
             </section>
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