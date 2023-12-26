<?php 
$page1 = "adminViewComplaints.php";
include 'includes/adminHeader.php';
include 'includes/adminparseReply_Complaint.php';



 ?>
  <?php if(!isset($_SESSION['username'])): ?>
            <h3 class="text-center text-light help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
                <div class="text-center">
               <div class="text-light">
               
                   
            
                  <?php if(isset($result))  echo $result;  ?>
                  <?php if(isset($_SESSION['result']))  echo $_SESSION['result']; $_SESSION['result']= "" ?>
                  <?php if(isset($session_errors))  echo $session_errors; $session_errors= array(); ?>
                <div>
                <?php toastMessage('Account successfully Deactivated'); ?>
                    <section class="container-fluid  text-light table-container">
                            
                                <table id="datatablesSimple" class="table text-light">
                                    <thead>
                                    
                                        <tr>
                                            <th>email</th>
                                            <th>complaint</th>
                                            <th>reply</th>
                                            
                                        </tr>
                                        
                                    </thead>
                                    
                                    <tbody>
                                    
                                      
                                                <td><?php echo $email_address;  ?></td>
                                                <td><?php echo $comment;  ?></td>
                                                <td>
                                                    <form method="POST" action="">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Reply</label>
                                                        <textarea class="form-control" name='response' id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        <input type='submit' name='submit' class="btn btn-danger mt-2">
                                                        </div>
                                                    </form>
                                                </td>
                                                   
                                                
                                            </tr>
                                      
                                    </tbody>
                                </table>
                            
                            </section>
                        </div>
                    </div>
                </main>
                <?php endif ?>
        <?php include 'includes/adminFooter.php'?>
        