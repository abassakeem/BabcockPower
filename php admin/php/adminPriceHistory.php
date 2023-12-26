<?php
$page1 = "adminBillUser.php";
include 'includes/adminHeader.php';
include 'includes/adminparsePriceHistory.php';
 ?>
  <?php if(!isset($_SESSION['username'])): ?>
            <h3 class="text-center text-light help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
                <div class="text-center">
               <div class="text-light">
               
                   
            
                  <?php if(isset($_SESSION['result']))  echo $_SESSION['result']; $_SESSION['result']= "" ?>
                  <?php if(isset($session_errors))  echo $session_errors; $session_errors= array(); ?>
                <div>
                <?php toastMessage('Account successfully Deactivated'); ?>
                    <section class="container-fluid  text-light table-container">
                            
                                <table id="datatablesSimple" class="table text-light">
                                    <thead>
                                    
                                        <tr>
                                            <th>ID</th>
                                            <th>Price</th>
                                            <th>Date Created</th>
                                        </tr>
                                        
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        while($row = $statement->fetch(PDO::FETCH_ASSOC) ){ ?>
                                        <tr>
                                                <td><?php echo $row['id'];  ?></td>      
                                                <td><?php echo $row['price'];  ?></td>      
                                                <td><?php echo $row['created_at'];  ?></td>    
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            
                            </section>
                        </div>
                    </div>
                </main>
                <?php endif ?>
        <?php include 'includes/adminFooter.php'?>
        