<?php
$page1 = "adminViewComplaints.php";
include 'includes/adminHeader.php';
include 'includes/adminparseViewComplaints.php';
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
                                    
                                        <tr style="text-align:center;">
                                            <th>Reply</th>
                                            <th>user ID</th>
                                    
                                            <th>Meter ID</th>
                                            <th>complaint ID</th>
                                            
                                            <th>Email Address</th>
                                            <th>Complaint</th>
                                            
                                        </tr>
                                        
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        while($row = $statement->fetch(PDO::FETCH_ASSOC) ){
                                             if ($row['statuss'] == "pending"){?>
                                        <tr>
                                        
                                                
                                            <td><a href="adminReply_Complaint.php?complaint_id=<?php echo $row['complaint_id']; ?>" class="btn btn-primary">Reply</a> </td>   
                
                                                <td><?php echo $row['users_id'];  ?></td>      
                                                
                                                <td><?php echo $row['meter_id'];  ?></td>
                                                <td><?php echo $row['complaint_id'];  ?></td>
                                               
                                                <td><?php echo $row['email_address'];  ?></td>
                                                <td><?php echo $row['comment'];  ?></td>
                                                
                                            </tr>
                                        <?php }} ?>
                                    </tbody>
                                </table>
                            
                            </section>
                        </div>
                    </div>
                </main>
                <?php endif ?>
        <?php include 'includes/adminFooter.php'?>
        