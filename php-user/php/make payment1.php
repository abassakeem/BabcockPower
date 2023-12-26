<?php 
include 'php includes/header.php';
//include 'php includes/parseMyprofile.php';

?>
   <?php if(!isset($_SESSION['meterid'])): ?>
            <h3 class="text-center">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
     <div class="container text-center make-payment-box">
          <div class="make-payment-content d-flex justify-content-center">
            <div class="col-12 col-md-6">
              <h1 class="make-payment-header">MAKE PAYMENT</h1>
              <div class="make-payment-box mb-5">
                <h4 class="account-details-header">ENTER YOUR ACCOUNT DETAILS</h4>
                
                <form class="form-box">
                  <div class="radio-button-choice mt-5 mb-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        <strong>Prepaid</strong>
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                      <label class="form-check-label" for="flexRadioDefault2">
                      <strong> Postpaid</strong>
                      </label>
                    </div>
                  </div>
                  <div class="row g-3 justify-content-center align-items-center align-them">
                    <div class="form-floating col-sm-12 col-md-6 mb-3">
                      <input type="text" class="form-control" placeholder="Meter Number" id="floatingInput" >
                      <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating col-sm-12 col-md-6 mb-3">
                      <input type="text" class="form-control" placeholder="Payer's Full Name" >
                      <label for="floatingInput">Payer's Full Name</label>
                    </div>
                    <div class="form-floating col-sm-12 col-md-6 mb-3">
                      <input type="Email" class="form-control" placeholder="Email adddress" >
                      <label for="floatingInput">Email adddress</label>
                    </div>
                    <div class="form-floating col-sm-12 col-md-6 mb-3">
                      <input type="text" class="form-control" placeholder="Phone number" >
                      <label for="floatingInput">Phone number</label>
                    </div>
                    <div class="form-floating col-sm-12 col-md-6 mb-3">
                      <input type="text" class="form-control" placeholder="Amount">
                      <label for="floatingInput">Amount</label>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-3">
                      <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                    </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        
        <?php include 'php includes/footer.php';?>
    <?php endif ?>