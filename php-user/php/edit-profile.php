<?php 
$page1 = "myprofile.php";
include 'php includes/header.php';
include 'php includes/parseEditProfile.php';
include 'php includes/parseChangePassword.php';
include 'deactivate.php';



?>





        
        <section>
          <div class="container">

            <div class ="text-center">
            <?php if(isset($result)) echo $result; ?>
            
              
            </div>
            <h6 class="text-center text-primary">Edit Profile</h6>
            
            <?php if(!isset($_SESSION['meterid'])): ?>
            <h3 class="text-center help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
            <form  method="POST" action="" enctype="multipart/form-data" class="row justify-content-center align-items-center " >
            
              <div class="col-sm-6 profile  mb-5">
                <div class="mb-5 text-center">
               
                <img src="<?php if(isset($profile_picture)) echo $profile_picture; ?>" name="profile_picture" alt="profile picture" class="text-primary profile_picture img img-fluid"><br>
                  <!-- <a href="">Change Profile Picture<small></small></a>
                  <input type="file" value="Change Profile Picture" class=""> -->
                  <!-- <div class="file mb-3edit-profile-link">
                    <label class="edit-profile-link  text-primary mt-3 " for="inputGroupFile01">Change Profile Picture</label>
                    <input type="file" name="select_profile_picture" class="choose-profile-picture" id="inputGroupFile01">
                    </div> -->
                    <!-- beginning of password thing -->


                    <div>
                    <p>
                      <a class="btn edit-profile-link mt-5 text-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      change password
                      </a>
                     
                    </p>
                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">
                        
                                <span class="form-floating mb-3">
                                    <input type="password" name="current_password" class="form-control input input1" id="floatingPassword" name=""placeholder="Enter Current password">
                                    <label for="floatingInput1"><small>Enter Current password</small></label>
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                </span>
                               
                                <span class="form-floating">
                                    <input type="password" name="new_password" class="form-control input input2" id="floatingPassword2" name="" placeholder="Enter New password">
                                    <label for="floatingInput2"><small>Enter New Password</small></label>
                                    
                                </span>
                                <span class="form-floating">
                                    <input type="password" name="confirm_new_password" class="form-control input Password" id="floatingPassword" name="" placeholder="Confirm New password">
                                    <label for="floatingInput2"><small>Confirm New Password</small></label>
                                    
                                </span>
                                <span class="button "></span>
                                    <input type="submit"  value="submit" name="submit" class="btn btn-primary submit-btn "><br>
                                </span>

                                </div>
                              </div>
                            
                    </div>

                    <!-- deactivate account -->
                    
                    <p>
                      <a class="btn edit-profile-link mt-3 text-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Deactivate Account
                      </a>
                     
                    </p>
                    <div class="collapse" id="collapseExample1">
                      <div class="card card-body">
                        
                                
                               
                                
                                
                                    <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">
                                    
                                
                                <span class="button "></span>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"    class="btn  deactivate-account submit-btn " onClick ="return">Deactivate account</button><br>



                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Account Deactivation</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            ARE YOU SURE YOU WANT TO DEACTIVATE YOUR ACCOUNT?
                                          </div>
                                          
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">NO</button>
                                            <input type="submit" name="deleteAccountBtn" value="Yes" class="btn btn-danger" >
                                          </div>
            
                                        </div>
                                      </div>
                                    </div>



                                </span>
                            
                      



              
              </div>
                    </div>
                    <!-- end of password thing  -->
                </div>
              </div>
                
              <div class="col-sm-6 details">
              <!-- <form  method="POST" action="" enctype="multipart/form-data"> -->
                   <div class="input-group mb-3 form-floating " title="Contact Admin to change">
                        <span class="input-group-text" id="basic-addon1">first Name</span>
                        <input type="text" name="firstname" class="form-control" disabled value="<?php if(isset($firstname)) {echo $firstname; }?>" aria-label="Username" id="first-name-input" aria-describedby="basic-addon1">   
                      </div>
                      
                      <div class="input-group mb-3 form-floating" title="Contact Admin to change">
                        <span class="input-group-text" id="basic-addon1">last Name</span>
                        <input type="text" name="lastname" class="form-control" disabled  disabled value="<?php if(isset($lastname)) echo $lastname; ?>" aria-label="Username" id="first-name-input" aria-describedby="basic-addon1">   
                      </div>
                      <div class="input-group mb-3 form-floating" title="Contact Admin to change">
                        <span class="input-group-text" id="basic-addon1">Meter Number</span>
                        <input type="text" name="meterid" class="form-control" disabled value="<?php if(isset($meterid)) echo $meterid; ?>" aria-label="Username" id="first-name-input" aria-describedby="basic-addon1">   
                      </div>
                      <div class="input-group mb-3 form-floating" >
                        <span class="input-group-text" id="basic-addon1">Email address</span>
                        <input type="text" name="email_address" class="form-control" value="<?php if(isset($email)) echo $email; ?>" aria-label="Username" id="first-name-input" aria-describedby="basic-addon1">   
                      </div>
                      <div class="input-group mb-3 form-floating" title="Contact Admin to change">
                        <span class="input-group-text" id="basic-addon1">Address</span>
                        <input type="text" name="address" class="form-control" disabled value="<?php if(isset($address)) echo $address; ?>" aria-label="Username" id="first-name-input" aria-describedby="basic-addon1">   
                      </div>
                      
                      <div class="input-group mb-3 form-floating">
                        <span class="input-group-text" id="basic-addon1">Zip Code</span>
                        <input type="text" name="zip_code" class="form-control" value="<?php if(isset($zip_code)) echo $zip_code; ?>" aria-label="Username" id="first-name-input" aria-describedby="basic-addon1">   
                      </div>
                      <div class="input-group mb-3 form-floating">
                        <span class="input-group-text" id="basic-addon1">Phone Number</span>
                        <input type="text" name="phone_number" class="form-control" value="<?php if(isset($phone_number)) echo $phone_number; ?>" aria-label="Username" id="first-name-input" aria-describedby="basic-addon1">   
                      </div>
                      <div class="input-group mb-3 form-floating">
                        <span class="input-group-text" id="basic-addon1">Date of birth</span>
                        <input type="date" name="date_of_birth" class="form-control" value="<?php if(isset($dob)) echo $dob; ?>" aria-label="Username" id="first-name-input" aria-describedby="basic-addon1">   
                      </div>
                      <div class="hidden-id">
                      <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">   
                      </div>
                      <div class="button text-center mb-5">
                        <button type="submit" name="updateProfileButton" class="btn btn-primary">Update</button>
                      </div>

                     

                     
                    </div>
                     
                      
                     
            </form>
                   
                 
              </div>
            </div>
          </div>
          
        </section>
      
        
    </div>
    
    <?php include 'php includes/footer.php';?>
    <?php endif ?>
    