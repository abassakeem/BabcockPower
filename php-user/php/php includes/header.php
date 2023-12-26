<?php


include 'database.php';
include 'utility.php';
include 'session.php';





 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Babcock Power</title>
    <link rel="shortcut icon" href="../abass project images/Screenshot (92).png">
     <!--start of bootstrap css -->
     <!--start of jquery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!--start of jquery  -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <!--end of  bootstrap css -->
     <!-- start of fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">

     <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">

     <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">

     <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">

     <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Donegal+One&family=Noto+Serif&display=swap" rel="stylesheet">

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

<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">

     <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">
     <!-- end of fonts -->
      <!-- start of style for external css-->
    <link rel="stylesheet" href="../css/dashboard.css">
      <link rel="stylesheet" href="../css/complaint history.css">
      <link rel="stylesheet" href="../css/complaintpage.css">
      <link rel="stylesheet" href="../css/edit-profile.css">
    <link rel="stylesheet" href="../css/myprofile.css">
    <link rel="stylesheet" href="../css/help.css">
    <link rel="stylesheet" href="../css/myaccount.css">
    <link rel="stylesheet" href="../css/transaction history.css">
        <link rel="stylesheet" href="../css/make payment.css">
    <!-- end of style for external css-->
      <!-- start of style for header and footer-->
    <link rel="stylesheet" href="../css/footer and header.css">
    <!-- end of style for header and footer-->
    <!-- start of style for dashboard navbar-->
    <link rel="stylesheet" href="../css/dashboard navbar.css">
    <!-- end of style for dashboard navbar-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script> </script>
    <!--for table-->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="vh-100">
    <div>
    
        <header class="container-fluid">
            <!-- <nav class="navbar ">
                <div class="container-fluid">
                  <a href="dashboard.php" class="navbar-brand sign-in-logo">AEE</a>
                  <a href="help.php" class="d-flex help">Help</a>
                </div>
              </nav> -->
        </header>
        
        <section class="dashboard-section1 bg-light header-container">
            <div class="container-fluid container1">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container">
                      <a class="navbar-brand text-dark nav-bar-navbar-brand text-dark" href="dashboard.html">Babcock Power</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="justify-content-end align-items-center text-center collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                          <li class='nav-item <?php echo ($page1 == "dashboard.php" ? "active" : "");?>'>
                            <a id="nav1" class="nav-link "  href="dashboard.php" >Dashboard</a>
                          </li>
                          <li class='nav-item <?php echo ($page1 == "myprofile.php" ? "active" : "");?>' >
                            <a id="nav1" class="nav-link box3" href="myprofile.php">My Profile</a>
                          </li>
                          <li  class='nav-item <?php echo ($page1 == "myaccount.php" ? "active" : "");?>' >
                            <a id="nav1" class="nav-link box2" href="myaccount.php">My Account</a>
                          </li>
                          <li  class='nav-item <?php echo ($page1 == "makepayment.php" ? "active" : "");?>'>
                            <a id="nav1" class="nav-link" href="make payment.php">Make Payment</a>
                          </li>
                          
                          <!-- <li  class='nav-item dropdown nav-item <?php echo ($page1 == "makecomplaint.php" ? "btn btn-sm btn-outline-primary" : "");?>'">
                            <a id="nav1" class="nav-link dropdown-toggle" href="complaint history.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Make A Complaint
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <li><a class="dropdown-item first-dropdown" href="complaintpage.php">Make A Complaint</a></li>
                              <li><a class="dropdown-item" href="complaint history.php">Complaint History</a></li>
                              
                            </ul>
                          </li> -->
                          <li class="nav-item log-out-btn" >
                              <a href="log out.php" class="btn nav-link log-out-button btn-outline-secondary">Log out</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
            
 
        </section>
        
                
        