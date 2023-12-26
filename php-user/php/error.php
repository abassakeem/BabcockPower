<?php
include 'session.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
     <!--start of bootstrap css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <!--end of  bootstrap css -->
     <!-- start of fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">

     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fahkwang:wght@200&family=Libre+Caslon+Text&family=Stint+Ultra+Expanded&display=swap" rel="stylesheet">
     <!-- end of fonts -->
      <!-- start of style for external css-->
    <link rel="stylesheet" href="../css/error.css">
    <!-- end of style for external css-->
      <!-- start of style for header and footer-->
    <link rel="stylesheet" href="../css/footer and header.css">
    <!-- end of style for header and footer-->
    <!-- start of style for dashboard navbar-->
    <link rel="stylesheet" href="../css/dashboard navbar.css">
    <!-- end of style for dashboard navbar-->
</head>
<body>
  <div>
    <header class="container-fluid">
        <nav class="navbar ">
            <div class="container-fluid">
              <a href="index.php" class="navbar-brand sign-in-logo">AEE</a>
              <a href="everyone-help.php" class="d-flex help">Help</a>
            </div>
          </nav>
    </header>
    <?php if(!isset($_SESSION['meterid'])): ?>
            <h3 class="text-center help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
    <section class="text-center error-image ">
    <h1 class="text-danger"> AN ERROR OCCURED!!!</h1>
    <img class="error-image img img-fluid" src="../abass svg for project/icons8-cancel.svg">
    <h1 class="text-danger"> TRANSACTION FAILED</h1>
    <a href="dashboard.php" > RETURN TO HOME PAGE</a>
    </section>
    <?php endif ?>
<?php
    include 'php includes/footer.php';
    ?>