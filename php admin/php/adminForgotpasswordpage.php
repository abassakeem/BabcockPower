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
                  <a href="index.html" class="navbar-brand text-danger sign-in-logo">AEE</a>
                  <a href="help.html" class="d-flex text-danger help">Help</a>
                </div>
              </nav>
        </header>
        <section>
            <div class="container">
                <div class="forgot-password-box">
                    <div class="row justify-content-center align-items-center ">
                        <div class="col-xs-12 text-light">
                            <h2 class="text-center"> Let's get you into your account</h2>
                            <h3>Tell us one of the following to get started: </h3>
                            <ul>
                                <li>Sign-in email address or mobile number</li>
                                <li>Recovery phone number</li>
                                <li>Recovery email address</li>

                            </ul>
                            <form class="form-floating mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control input input1" id="floatingInput1" name=""placeholder="Enter registered Email address or phone number">
                                    <label for="floatingInput1"><small>Enter registered Email address or phone number</small></label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control input input1" id="floatingInput2" name="" placeholder="Enter your Meter ID">
                                    <label for="floatingInput2"><small>Enter your Meter ID</small></label>
                                </div>
                                <div class="button "></div>
                                    <input type="submit"  value="submit" name="submit" class="btn btn-danger text  submit-btn "><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'includes/adminFooter.php'?>