<?php

include 'php includes/parseSignIn.php';
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="shortcut icon" href="../abass project images/Screenshot (92).png">
     <!--start of bootstrap css -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <!--end of  bootstrap css -->
     <!-- start of fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">
     <!-- end of fonts -->
     <link rel="stylesheet" href="../css/signin.css">
      <!-- start of style for header and footer-->
    <link rel="stylesheet" href="../css/footer and header.css">
     <!-- end of style for header and footer-->
     <!-- begining of sweet alert javascript -->
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <!-- end of sweet alert javascript -->
</head>
<body>
    <div class="container-fluid vh-100">
    
        <header>
            <nav class="navbar ">
                <div class="container-fluid">
                  <a href="index.html" class="navbar-brand sign-in-logo">Babcock Power</a>
                  <a href="help.html" class="d-flex help">Help</a>
                </div>
              </nav>
        </header>
        <section>
            <div class="container">
                
                    <div class="row justify-content-center align-items-center text-center">
                        <div class="col-xm-0 col-md-6 d-none d-md-block">
                            <img class="img-fluid" src="../abass svg for project/handshake.svg">
                        </div>
                        <div class="col-xm-12 col-md-6"> 
                            <div class="sign-in-box justify-content-center">
                            <h3 class="sign-in-logo logo2 ">Babcock Power</h3>
                            <h5>Sign in</h5>
                            
                            <?php if(isset($result)) echo $result; ?>
                            <?php if(!empty($errors)) echo show_errors($errors); ?>
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                <div class="form-floating mb-3">
                                    <input type="text" name="meterid" class="form-control input input1" id="floatingInput" placeholder="Meter ID">
                                    <label for="floatingInput">Meter ID</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control input input2" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                    
                                </div>
                                
                                <div class="form-check mb-3">
                                    <input class="form-check-input" name="remember_me" type="checkbox" value="yes" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember me
                                    </label>
                                </div>
                                <div>
                                <input type="submit" name="submit" value="Sign in" class="btn btn-primary  submit-btn"><br>
                                </div>
                            </form>
                            <div>
                                <a href="forgot password.php" class="forgot-password text-right">forgot password?</a><br>
                                <a href="sign up.php" class="btn btn-outline-primary create-an-account">Create an account</a>
                            </div>
                        </div>

                        </div>
                    </div>
                
            </div>
        </section>

        
    </div>
    <footer class="sign-up-footer text-center">
        <p><small>Babcock Power. Copyright © 2021</small></p>
    </footer>
    <script src="../js/show-password.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>