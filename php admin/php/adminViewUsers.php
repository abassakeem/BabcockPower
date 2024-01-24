<?php
$page1 = "adminViewUsers.php";
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
                    <div class="text-center">
                        <h3>Total Users: <?php echo $totalUsers; ?></h3>
                    </div>
                            
                                <table id="datatablesSimple" class="table text-light">
                                    <thead>
                                    
                                        <tr>
                                            <th>Edit</th>
                                            <th>Delete</th>
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
                                       foreach ($users as $row) :
                                        ?>
                                        <tr>
                                        <td><a  class="btn btn-primary" href="adminEditUsers.php?users_id=<?php echo $row['users_id']?>">Edit</a></td>
                                                
                                            <td>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Deactivate/delete
                                            </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header bg-dark">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body bg-dark">
                                                            <p>SELECT AN OPTION<p>
                                                        </div>
                                                        <div class="modal-footer bg-dark">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                           
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1">Delete</button>
                                                             <!-- Modal -->
                                                    <div class="modal fade " id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header bg-dark">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body bg-dark">
                                                            <p>Are you sure you want to delete<p>
                                                        </div>
                                                        <div class="modal-footer bg-dark">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                                                            <a href="adminDelete_user.php?users_id=<?php echo $row['users_id']; ?>" class="btn btn-danger">YES</a> 
                                                            
                                                            
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2">Deactivate</button>
                                                             <!-- Modal -->
                                                    <div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header bg-dark">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body bg-dark">
                                                            <p>ARE YOU SURE YOU WANT TO DEACTIVATE<p>
                                                        </div>
                                                        <div class="modal-footer bg-dark">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                                                            <a href="adminDeactivate_user.php?users_id=<?php echo $row['users_id']; ?>" class="btn btn-danger">YES</a> 
                                                          
                                                            
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </td>   
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
                                            <?php endforeach; ?>
                                    </tbody>
                                </table>
                            
                            </section>
                        </div>
                    </div>
                </main>
                <?php endif ?>
        <?php include 'includes/adminFooter.php'?>
        