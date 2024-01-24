<?php
$page1 = "adminDashboard.php";
include 'includes/adminHeader.php';
include 'includes/adminparseViewUser.php';
include 'includes/adminparseUserHistory.php';
include 'includes/adminparseDisplayPrice.php';

if (!isset($_SESSION['username'])) :
?>
    <h3 class="text-center text-light help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="signup.php">Sign up</a></h3>
<?php else : ?>
    <section class="container text-light table-container">
        <div class="row d-flex justify-content-center flex-row align-items-center">
            <div class="glow-container col-sm-4 d-flex justify-content-center">
                <div class="glow text-center">
                    <h1 class="price-per-watt">
                        <?php
                        // Display the total number of users
                        echo count($users);
                        ?>
                    </h1><br>
                    <p>Users</p>
                </div>
                <div class="change-price-btn">
                </div>
            </div>

            <div class="glow-container col-sm-4 d-flex justify-content-center">
                <div class="glow text-center">
                   
                         <div class="d-flex justify-content-between align-items-center"><h1 class="price-per-watt">&#8358 </h1>
                            <?php if (isset($totalAmount)) : ?>
                                <h1 class="price-per-watt"> <?php echo number_format($totalAmount, 2); ?></h1>
                            <?php else : ?>
                                <p>No data available</p>
                            <?php endif; ?>
                        </div>
<br>
                    <p>Amount generated</p>
                </div>
                <div class="change-price-btn">
                </div>
            </div>

            <div class="glow-container col-sm-4 d-flex justify-content-center">
                <div class="glow text-center">
                    <h1 class="price-per-watt">&#8358
                        <?php
                        // Display the first row's price as price per watt
                        if ($stmt->rowCount() > 0) {
                            $rs = $stmt->fetch(PDO::FETCH_ASSOC);
                            echo $rs['price'];
                        } else {
                            echo "0"; // Display a default value if no rows are found
                        }
                        ?>
                    </h1><br>
                    <p> Price per Watt</p>
                </div>
                <div class="">
                </div>
            </div>
        </div>

        <table id="datatablesSimple" class="table text-light">
            <thead>
                <tr>
                    <th>user ID</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>Meter ID</th>
                    <th>Date of birth</th>
                    <th>Email Address</th>
                    <th>Phone number</th>
                    <th>address</th>
                    <th>state</th>
                    <th>Zip Code</th>
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
                        <td><?php echo $row['date_of_birth'];  ?></td>
                        <td><?php echo $row['email_address'];  ?></td>
                        <td><?php echo $row['phone_number'];  ?></td>
                        <td><?php echo $row['addresss'];  ?></td>
                        <td><?php echo $row['states'];  ?></td>
                        <td><?php echo $row['zip_code'];  ?></td>
                        <td><?php echo $row['activated'];  ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
<?php endif; ?>
<?php include 'includes/adminFooter.php' ?>
