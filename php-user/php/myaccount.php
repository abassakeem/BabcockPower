<?php 
$page1 = "myaccount.php";
include 'php includes/header.php';
//include 'php includes/parseMyprofile.php';
include 'php includes/parseDashboardTransactionHistory.php';

?>
            <section class="dashboard-section2">
                <div class="container container2 mt-5">
                    <h1>View Account</h1>
                    <?php if(!isset($_SESSION['meterid'])): ?>
            <h3 class="text-center help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
                </div>
             </section>
             <section class="dashboard-section3">
                 <div class="container container3 mt-5">
                     <div class="row g-1">
                        <div class="col-sm-4">
                            <div>
                                <h4> User ID </h4>
                                
                                <p><?php if(isset($users_id)){ echo $users_id;} ?></p>
                            </div>
                            
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <h4>Last Payment</h4>
                                <p><?php
                                    while($row = $statement->fetch(PDO::FETCH_ASSOC) ){ ?>
                                    <span><?php echo $row['date_purchased']  ?></p>
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-4">
                            <div>
                                <h4>Transaction History</h4>
                                <p><span>&#8358;<?php echo $row['amount'];  ?></span>
                                <?php } ?></p>
                            </div>
                            
                        </div>
                    </div>
                 </div>
             </section>
             <section class="dashboard-section4 trans">
                 <div class="container container4 ">
                     <div class="row ">
                        <div class="col-sm-4">
                            <div>
                                <a href="make payment.php" style="color: #1c62ac">PAY NOW</a>
                            </div>
                            
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <a href="payment statement.php" style="color: #1c62ac">VIEW ALL STATEMENTS</a>
                            </div>
                            
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <a href="transaction history.php" style="color: #1c62ac">VIEW ALL</a>
                            </div>
                            
                        </div>
                        
                    </div>
                    <?php endif ?>
                 </div>
             </section>
        
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>   
  <?php include 'php includes/footer.php'?>