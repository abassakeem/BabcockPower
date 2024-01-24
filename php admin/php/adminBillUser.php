<?php
$page1 = "adminBillUser.php";
include 'includes/adminHeader.php';
include 'includes/adminparseViewUser.php';

if (!isset($_SESSION['username'])) :
?>
    <h3 class="text-center text-light help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="signup.php">Sign up</a></h3>
<?php else : ?>
    <div class="text-center">
        <div class="text-light  py-5">
            <?php if (isset($_SESSION['result'])) echo $_SESSION['result'];
            $_SESSION['result'] = ""; ?>
            <?php if (isset($session_errors)) echo $session_errors;
            $session_errors = array(); ?>
            <div>
                <?php toastMessage('Account successfully Deactivated'); ?>
                <section class="container-fluid  text-light table-container">

                    <?php
                    // Count the total number of users
                    $totalUsers = $statement->rowCount();
                    ?>
                    <div class="text-center">
                        <h3>Total Users: <?php echo $totalUsers; ?></h3>
                    </div>

                    <table id="datatablesSimple" class="table text-light ">
                        <thead>
                            <tr class="text-center">
                               
                                <th>user ID</th>
                                <th>firstname</th>
                                <th>lastname</th>
                                <th>Meter ID</th>
                                <th>Activated</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            // Loop through the stored $users array
                foreach ($users as $row) :
                    ?>
                        <tr>
                        
                        <td><?php echo $row['users_id'];  ?></td>      
                                                <td><?php echo $row['firstname'];  ?></td>      
                                                <td><?php echo $row['lastname'];  ?></td>
                                                <td><?php echo $row['meterid'];  ?></td>
                                                
                                                <td><?php echo $row['activated'];  ?></td>   
                        </tr>
                    <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
</main>
<?php endif ?>
<?php include 'includes/adminFooter.php' ?>
