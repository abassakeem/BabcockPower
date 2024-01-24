<?php include 'includes/adminparseSignIn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
     <!--start of bootstrap css -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <!--end of  bootstrap css -->
    
     <link rel="stylesheet" href="../css/adminSignin.css">
      <!-- start of style for header and footer-->
    <link rel="stylesheet" href="../css/adminFooterandheader.css">
     <!-- end of style for header and footer-->
</head>
<body>
    <div class="container-fluid">
        <header>
            <nav class="navbar ">
                <div class="container-fluid">
                  <a href="../html/homepage.html" class="navbar-brand sign-in-logo">BU-POWER</a>
                  
                </div>
              </nav>
        </header>
        <section>
            <div class="container">
                
                    <div class="row justify-content-center align-items-center text-center  mt-5">
                        <div class="col-xm-0 col-md-6">
                            <img class="img-fluid" src="../images/undraw_Login_re_4vu2.svg">
                        </div>
                        <div class="col-xm-12 col-md-6"> 
                            <div class="sign-in-box justify-content-center">
                            <h3 class="sign-in-logo logo2 ">BU-POWER</h3>
                            <h5 class="text-light">Admin Sign in</h5>
                            <div class="text-light">
                                <?php if(isset($result)) echo $result; ?>
                                <?php if(!empty($errors)) echo show_errors($errors); ?>
                            </div>
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                <div class="form-floating mb-3">
                                    <input type="text" name="username" class="form-control input input1" id="floatingInput" placeholder="Meter ID">
                                    <label for="floatingInput" class="form-label">username</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control input input2" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword" class="form-label">Password</label>
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                    
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label text-light" for="flexCheckDefault">
                                        Remember me
                                    </label>
                                </div>
                                <div>
                                <input type="submit" name="submit" value="Sign in" class="btn btn-danger  submit-btn"><br>
                                </div>
                            </form>
                            <div>
                                <a href="forgotpasswordpage.html" class="forgot-password text-right text-info">forgot password?</a><br>
                                <a href="sign up.html" class="btn btn-outline-danger create-an-account">Create an account</a>
                            </div>
                        </div>

                        </div>
                    </div>
                
            </div>
        </section>

        
    </div>
   