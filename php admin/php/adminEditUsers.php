<?php include
$page1 = "adminViewUsers.php";
'includes/adminHeader.php';
include 'includes/adminparseEditUsers.php';
 ?>
 <?php if(!isset($_SESSION['username'])): ?>
            <h3 class="text-center text-light help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
                <div class="text-center">
               <div class="text-light">
               
                   
            
               <?php if(isset($result)) echo $result; ?>
                  <?php if(isset($session_errors))  echo $session_errors; $session_errors= array(); ?>
                <div>
<div class="container container-sign-up text-center">
                <div class="sign-up-box">
                <h1>Edit User</h1>
                
                <?php if(isset($result)) echo $result; ?>
                
                <?php if(isset($result1)) echo $result1; ?>
                <?php if(!empty($errors)) echo show_errors($errors); ?>
                <form class="row g-3 form-floating" method="POST" action="">


       <div class="col-sm-12">
                           <label for="inputstatus" class="form-label status ">status/activated</label>
                           <select id="inputstatus" name="status"  class="form-select" >
                             
                               <option <?php if($status == '1'){echo 'selected';} ?>>1</option>
                               <option <?php if($status == '0'){echo 'selected';} ?>>0</option>
                           </select>
                           </div>
                       <div class="col-sm-12">
                           <label for="inputrole" class="form-label role ">Role</label>
                           <select id="inputrole" name="role"  class="form-select" >
                              
                               <option <?php if($role == 'Admin'){echo 'selected';} ?>>Admin</option>
                               <option <?php if($role == 'User'){echo 'selected';} ?>>User</option>
                           </select>
                           </div>
                           
                           <div class="col-sm-12 form-floating">
                           <input type="text" name="firstname" class="form-control" id="first-name-input" value="<?php echo $firstname;?>"  placeholder="First name">
                           <label for="first-name-input" class="form-label">First name</label>
                           </div>
                           <div class="col-sm-12 form-floating">
                               
                               <input type="text" name="lastname" class="form-control" id="last-name-input" value="<?php echo $lastname;?>" placeholder="last name">
                               <label for="last-name-input" class="form-label">last name</label>
                           </div>
                           <div class="col-sm-12 form-floating"> 
                               <input type="text" name="meterid" class="form-control" id="meter_id-input" value="<?php echo $meterid;?>" placeholder="Meter ID">
                               <label for="meter_id-input" class="form-label">Meter ID</label>
                           </div>
                           <div class="col-sm-12 form-floating"> 
                               <input type="text" name="username" class="form-control" id="username-input" value="<?php echo $username;?>" placeholder="username">
                               <label for="username-input" class="form-label">username</label>
                           </div>
                           <div class="col-sm-12 form-floating"> 
                               <input type="date" name="date_of_birth" class="form-control" id="calendar-input" value="<?php echo $dob;?>" placeholder="calendar">
                               <label for="calendar-input" class="form-label">Date of Birth</label>
                           </div>
                           <div class="col-sm-12 form-floating"> 
                               <input type="email" name="email_address" class="form-control" id="email-input" value="<?php echo $email;?>" placeholder="Email address">
                               <label for="email-input" class="form-label">Email address</label>
                           </div>
                           <div class="col-sm-12 form-floating">
                               <input type="text" name="password" class="form-control" id="floatingPassword" value="<?php echo $password;?>" placeholder="Password">
                               <label for="floatingPassword" class="form-label">Password</label>
                               <i class="bi bi-eye-slash" id="togglePassword"></i>
                           
                           </div>
                           
                           <div class="col-sm-12 form-floating">
                               <input type="text" name="phone_number" class="form-control" id="phone-number" value="<?php echo $phone_number;?>" placeholder="Mobile phone number">
                               <label for="phone-number" class="form-label">Mobile phone number</label>
                           
                           </div>
                           <div class="col-sm-12 form-floating">
                           
                           <input type="text" name="address" class="form-control" id="Address-input" value="<?php echo $address;?>" placeholder="Address">
                           <label for="Address-input" class="form-label">Address</label>
                           </div>
                           
                       
                           <div class="col-sm-4">
                           <label for="inputstate"  class="form-label state">State</label>
                           <select id="inputstate" name="states" class="form-select" >
                               <option  disabled>Choose...</option>
                               <option <?php if($state == 'Abia'){echo 'selected';} ?> >Abia</option>
                               <option <?php if($state == 'Adamawa'){echo 'selected';} ?> >Adamawa</option>
                               <option value="Akwa Ibom">Akwa Ibom</option>
                               <option value="Anambra">Anambra</option>
                               <option value="Bauchi">Bauchi</option>
                               <option value="Bayelsa">Bayelsa</option>
                               <option value="Benue">Benue</option>
                               <option value="Borno">Borno</option>
                               <option value="Cross River">Cross River</option>
                               <option value="Delta">Delta</option>
                               <option value="Ebonyi">Ebonyi</option>
                               <option value="Edo">Edo</option>
                               <option value="Ekiti">Ekiti</option>
                               <option value="Enugu">Enugu</option>
                               <option value="Gombe">Gombe</option>
                               <option value="Imo">Imo</option>
                               <option value="Jigawa">Jigawa</option>
                               <option value="Kaduna">Kaduna</option>
                               <option value="Kano">Kano</option>
                               <option value="Katsina">Katsina</option>
                               <option value="Kebbi">Kebbi</option>
                               <option value="Kogi">Kogi</option>
                               <option value="Kwara">Kwara</option>
                               <option value="Lagos">Lagos</option>
                               <option value="Nasarawa">Nasarawa</option>
                               <option value="Niger">Niger</option>
                               <option value="Ogun">Ogun</option>
                               <option value="Ondo">Ondo</option>
                               <option value="Osun">Osun</option>
                               <option <?php if($state == 'Oyo'){echo 'selected';} ?> >Oyo</option>
                               <option value="Plateau">Plateau</option>
                               <option value="Rivers">Rivers</option>
                               <option value="Sokoto">Sokoto</option>
                               <option value="Taraba">Taraba</option>
                               <option value="Yobe">Yobe</option>
                               <option value="Zamfara">Zamfara</option>
                               <option value="">FCT(Abuja)</option>
                           </select>
                           </div>
                           <div class="col-sm-4 form-floating">
                           <input type="text" name="zip_code" value="<?php echo $zip_code;?>" class="form-control" id="inputZip" placeholder="Zip" maxlength="10">
                           <label for="inputZip" class="form-label">Zip</label>
                           </div>
                           
                           </div>
                           </div>
                           <div class="col--sm-12">
   
   
   
                           <input type="submit" name="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" value="Update">
                          
                           </div>
                           
                       </form>
            <?php endif ?>
        <?php include 'includes/adminFooter.php'?>
        