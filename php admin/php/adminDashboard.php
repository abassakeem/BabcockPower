<?php
$page1 = "adminDashboard.php";
include 'includes/adminHeader.php';
include 'includes/adminparseViewUser.php';
include 'includes/adminparseDisplayPrice.php';
?>
 <?php if(!isset($_SESSION['username'])): ?>
            <h3 class="text-center text-light help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
                    <section class="container  text-light table-container">
                        <div class="glow-container ">
                            <div class="glow">
                                <h1 class="price-per-watt"><?php 
                                    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)){ 
                                        echo $rs['price'];
                                        }
                                ?></h1><br>
                                
                            </div>
                            <div class="change-price-btn">
                            <a href="adminPrice.php" class="btn btn-danger mt-3 mb-5 ">Change Price per Watt</a>
                                    </div>
                        </div>
                    
                            
                    <table id="datatablesSimple" class="table text-light">
                                    <thead>
                                    
                                        <tr>
                                            
                                            <th>user ID</th>
                                            <th>firstname</th>
                                            <th>lastname</th>
                                            <th>Meter ID</th>
                                            <th>Date of birth</th>
                                            <th>Email Address</th>
                                            <th>Phone number</th>
                                            <th>address</th>
                                            <th>state</th>
                                            <th>Zip Code</th>
                                            <th>Activated</th>
                                        </tr>
                                        
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        while($row = $statement->fetch(PDO::FETCH_ASSOC) ){ ?>
                                        <tr>
                                       
                                                <td><?php echo $row['users_id'];  ?></td>      
                                                <td><?php echo $row['firstname'];  ?></td>      
                                                <td><?php echo $row['lastname'];  ?></td>
                                                <td><?php echo $row['meterid'];  ?></td>
                                                <td><?php echo $row['date_of_birth'];  ?></td>
                                                <td><?php echo $row['email_address'];  ?></td>
                                                <td><?php echo $row['phone_number'];  ?></td>
                                                <td><?php echo $row['addresss'];  ?></td>
                                                <td><?php echo $row['states'];  ?></td>
                                                <td><?php echo $row['zip_code'];  ?></td>
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
