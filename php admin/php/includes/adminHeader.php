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
        <title>BU-POWER Admin</title>
    
    
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
       
        <section class="dashboard-section1 navigation">
            <div class="container-fluid container1">
                <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center align-items-center">
                    <div class="container">
                      <a class="navbar-brand nav-bar-navbar-brand" style="color: #a97703" href="dashboard.html">BU-POWER</a>
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
                          
                          <li class='nav-item '>
                          <a class="nav-link text-light link" href="logout.php">Logout</a>
                            
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </section>