<?php

include 'includes/adminSession.php'; 
include 'includes/adminDatabase.php'; 
include 'includes/adminUtility.php'; ?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - AEE Admin</title>
         <!-- start of fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Lato:wght@300&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">
     <!-- end of fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <!-- <link href="../css/styles.css" rel="stylesheet" /> -->
            <!-- start of style for header and footer-->
    <link rel="stylesheet" href="../css/adminFooterandheader.css">
    <!-- end of style for header and footer-->
    <link rel="stylesheet" href="../css/adminDashboard.css">
    <link rel="stylesheet" href="../css/adminNewPrice.css">
    <link rel="stylesheet" href="../css/adminTables.css">
    <link rel="stylesheet" href="../css/adminAdduser.css">
    
    <link rel="stylesheet" href="../css/adminEditUser.css">
      <!-- start of style for dashboard navbar-->
      <link rel="stylesheet" href="../css/adminDashboard-navbar.css">
      <!-- end of style for dashboard navbar-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="container-fluid  navbar navbar-expand navbar-dark ">
            <!-- Navbar Brand-->
            <a href="dashboard.html" class="navbar-brand sign-in-logo text-danger">AEE</a>
            
           
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-danger" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
           
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <section class="dashboard-section1 navigation">
            <div class="container-fluid container1">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                      <a class="navbar-brand text-danger nav-bar-navbar-brand" href="dashboard.html">AEE</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="justify-content-end align-items-center text-center collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                          <li class='nav-item <?php echo ($page1 == "adminDashboard.php" ? "btn btn-sm btn-outline-danger" : "");?>'>
                            <a class="nav-link text-light link"  href="adminDashboard.php">Dashboard</a>
                          </li>
                          <li class='nav-item <?php echo ($page1 == "adminBillUser.php" ? "btn btn-sm btn-outline-danger" : "");?>' >
                            <a class="nav-link text-light link" href="adminBillUser.php">Bill Users</a>
                          </li>
                          <li class='nav-item <?php echo ($page1 == "adminAddUser.php" ? "btn btn-sm btn-outline-danger" : "");?>'>
                            <a class="nav-link text-light link" href="adminAddUser.php">Register User</a>
                          </li>
                          <li class='nav-item <?php echo ($page1 == "adminViewUsers.php" ? "btn btn-sm btn-outline-danger" : "");?>'>
                            <a class="nav-link text-light link" href="adminViewUsers.php">Users</a>
                          </li>
                          
                          <li class='nav-item <?php echo ($page1 == "adminViewComplaints.php" ? "btn btn-sm btn-outline-danger" : "");?>'>
                            <a class="nav-link text-light link"  href="adminViewComplaints.php" >
                              Complaints
                            </a>
                            
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </section>