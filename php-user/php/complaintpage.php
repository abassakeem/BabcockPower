<?php 
$page1 = "makecomplaint.php";
include 'php includes/header.php';
include 'php includes/parseComplaintPage.php';

?>
        <section>
        <?php if(!isset($_SESSION['meterid'])): ?>
            <h3 class="text-center help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
            <div class="container complaint-box-container ">
           
              <div class="complaint-history">
                <a class="btn btn-primary mb-3" href="complaint history.php">Complaint History</a>
              </div>
               <div class="text-center">
                <?php if(isset($result)) echo $result; ?>
                <?php if(isset($result1)) echo $result1; ?>
                <?php if(!empty($errors)) echo show_errors($errors); ?>
                </div>
                <div class="complaint-box row justify-content-center align-items-center text-center">
                    <h1 class="mt-3">Submit a complaint</h1>
                    <form class="complaint-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <div class="form-floating mt-3 mb-3">
                            <input type="email" name="email_address" class="form-control no-border" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput"  class="text-secondary">Email address</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="text" name="meter_id" class="form-control no-border" id="floatingmeter-ID" placeholder="meter ID">
                            <label for="floatingmeter-ID" class="text-secondary">Meter ID</label>
                          </div>
                          <div>
                            <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id ?>"  >
           
                          </div>
                        <div class="form-floating mb-5">
                            <textarea name="comment" class="form-control  text-area" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
                            <label for="floatingTextarea2" class="text-secondary">Details of the complaint</label>
                          </div>
                          <div class="">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary mb-3">
                            </div>
                    </form>
                </div>
            </div>
            <?php endif ?>
        </section>
      </div>
        
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>   
</body>
</html>