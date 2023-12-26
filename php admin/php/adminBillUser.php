<?php
$page1 = "adminBillUser.php";
include 'includes/adminHeader.php';
include 'includes/adminparseViewUser.php';
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
                                            <th>Bill</th>
                                            
                                            <th>user ID</th>
                                            <th>firstname</th>
                                            <th>lastname</th>
                                            <th>Meter ID</th>
                                            
                                            <th>Activated</th>
                                        </tr>
                                        
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        while($row = $statement->fetch(PDO::FETCH_ASSOC) ){ ?>
                                        <tr>
                                        <td><a  class="btn btn-primary" href="adminInsertBill.php?users_id=<?php echo $row['users_id']?>">Bill</a></td>
                                                
                                           
                                                <td><?php echo $row['users_id'];  ?></td>      
                                                <td><?php echo $row['firstname'];  ?></td>      
                                                <td><?php echo $row['lastname'];  ?></td>
                                                <td><?php echo $row['meterid'];  ?></td>
                                                
                                                <td><?php echo $row['activated'];  ?></td>   
                                                
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
        