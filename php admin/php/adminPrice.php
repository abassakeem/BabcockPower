<?php
$page1 = "adminDashboard.php";
include 'includes/adminHeader.php';
include 'includes/adminparsePrice.php';
?>
 <?php if(!isset($_SESSION['username'])): ?>
            <h3 class="text-center text-light help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <div class="text-center">
            <?php else: ?>

                <?php if(isset($result)) echo $result; ?>
                <?php if(isset($result1)) echo $result1; ?>
                <?php if(!empty($errors)) echo show_errors($errors); ?>
                </div>
            <div class="container">
            <a href="adminPriceHistory.php" class= "btn btn-outline-danger">Check Price History </a>
            <div class="input-new-price-box ">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                <div class="form-floating mb-3">
                                    <input type="text" name="new_price" class="form-control input input1" id="floatingInput" placeholder="Enter New Price">
                                    <label for="floatingInput" class="form-label">Enter New Price</label>
                                </div>
                                
                               
                                <div>
                                <input type="submit" name="submit" value="Update" class="btn btn-danger mt-5 submit-btn"><br>
                                </div>
                            </form>
                            </div>
            </div>
                <?php endif ?>
        <?php include 'includes/adminFooter.php'?>
