<?php 
$page1 = "myprofile.php";
include 'php includes/header.php';
include 'php includes/parseMyprofile.php';

?>
         
        <section>
                
          <div class="container text-center">
         

            
            <?php if(!isset($_SESSION['meterid'])): ?>
            <h3 class="text-center">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
           
               <div class="text-center">
               <div>
                  <?php if(isset($_SESSION['result']))  echo $_SESSION['result']; $_SESSION['result']= "" ?>
                  <?php if(isset($session_errors))  echo $session_errors; $session_errors= array(); ?>
                <div>
        
            <div class="content row text-center justify-content-center align-items-center ">
            
              <div class="img-box col-sm-6 profile justify-content-center align-items-center">
                <div class="container container-for-image">
                  <div class="container text-center justify-content-center align-items-center">
                  <img src="<?php if(isset($profile_picture)) echo $profile_picture; ?>" name="profile_picture" alt="profile picture" class="profile-picture text-primary img img-fluid"><br>
                <div class="mt-5 edit-profile-btn">
                  <a class="edit-profile-link mt-5" style="color: #1c62ac" href="edit-profile.php?user_identity=<?php if(isset($encode_id)) echo $encode_id; ?>"><small>Edit profile</small></a>
            </div>
            </div>
           
                </div>
              </div>
              <div class="col-sm-6 my-profile-details">
                <table class="table table-hover caption-top">
                  <thead>
                    <caption >My Details</caption> 
                  </thead>
                  <tbody>
                  
                   
                    <tr>
                      <th scope="row">Name</th>
                      <td><?php if(isset($name)) echo $name; ?></td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Meter number</th>
                      <td><?php if(isset($meterid)) echo $meterid; ?></td>
                      
                    </tr>
                    <tr>
                      <th scope="row">User Id</th>
                      <td><?php if(isset($users_id)) echo $users_id; ?></td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Email address</th>
                      <td><?php if(isset($email)) echo $email; ?></td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Address</th>
                      <td><?php if(isset($address)) echo $address; ?></td>
                      
                    </tr>
                    <tr>
                      <th scope="row">zip code</th>
                      <td><?php if(isset($zip_code)) echo $zip_code; ?></td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Phone number</th>
                      <td><?php if(isset($phone_number)) echo $phone_number; ?></td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Date of birth</th>
                      <td><?php if(isset($dob)) echo $dob; ?></td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Date of joining</th>
                      <td><?php if(isset($date_joined)) echo $date_joined; ?></td>
                      
                    </tr>
                   
                    <tr>
                      <th scope="row">Last login</th>
                      <td><?php if(isset($last_login)) echo $last_login; ?></td>
                    </tr>
                     
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <?php endif ?>
        </section>
      
 <?php include 'php includes/footer.php'?>