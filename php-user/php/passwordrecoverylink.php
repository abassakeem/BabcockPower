<?php

include 'database.php';
include 'utility.php';
include 'php includes/parsePasswordRecoveryLink.php';


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>
     <!--start of bootstrap css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <!--end of  bootstrap css -->
     <!-- start of fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">
     <!-- end of fonts -->
      <!-- start of external css-->
    <link rel="stylesheet" href="../css/forgotpasswordpage.css">
    <!-- end of external css-->
      <!-- start of style for header and footer-->
    <link rel="stylesheet" href="../css/footer and header.css">
    <!-- end of style for header and footer-->
</head>
<body>
    <div class="container-fluid">
        <header>
            <nav class="navbar ">
                <div class="container-fluid">
                  <a href="index.php" class="navbar-brand sign-in-logo">AEE</a>
                  <a href="everyone-help.php" class="d-flex help">Help</a>
                </div>
              </nav>
        </header>
        <section>
            <div class="container">
                <div class="forgot-password-box">
                    <div class="row justify-content-center align-items-center ">
                        <div class="col-xs-12">
                            <h2 class="text-center"> Let's get you into your account</h2>
                            <?php if(isset($result)) echo $result; ?>
                            <?php if(!empty($errors)) echo show_errors($errors); ?>


                            <h3>RESET PASSWORD </h3>
                           
                            <form class="form-floating mb-3" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                
                                <div class="form-floating">
                                    <input type="password" name="new_password" class="form-control input input1" id="floatingInput2" name="" placeholder="Enter New password">
                                    <label for="floatingInput2"><small>Enter New Password</small></label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="confirm_new_password" class="form-control input input1" id="floatingInput2" name="" placeholder="Confirm New password">
                                    <label for="floatingInput2"><small>Confirm New Password</small></label>
                                </div>
                                <input type="hidden" name="user_id" value="<?php if(isset($id)) echo $id ?>">
                                <div class="button">
                                    <input type="submit"  value="submit" name="submit" class="btn btn-primary submit-btn "><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>