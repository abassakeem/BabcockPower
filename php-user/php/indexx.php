<?php

include 'database.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Babcock Power</title>
    <!-- <link rel="shortcut icon" href="../abass project images/Screenshot (92).png"> -->
   
    <!-- start of fonts -->
    
    <!-- end of fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200&family=Orelega+One&display=swap" rel="stylesheet">
   <!-- start of external style sheet -->
    <link rel="stylesheet" href="../css/homepage.css">
    <!-- end of external style sheet -->

</head>
<body>

    <!----------------- NAVIGAION ------------------->
    <nav>
        <div class="logo">
            <ion-icon name="flash-sharp"></ion-icon>
            <h2>BU-POWER</h2>
        </div>

        <div class="login-section">
            <button><a href="signin.php">Log In</a></button>
            <button><a href="sign up.php">Sign Up</a></button>
        </div>
    </nav>


    <!----------------- HERO SECTION ------------------->
    <section class="hero-section">
            <div class="hero-info">
                <h2>Electricity Bill Payment process simplified</h2>
                <p>Pay your electricy bill faster from anywhere and at anytime with 
                    your credit card or bank transfer.
                </p>

               <a href="sign up.php" class="get-started"> <button>Get Started <ion-icon name="chevron-forward-sharp"></ion-icon></button></a>
            </div>
            <div class="hero-img">
                <img src="../abass project images/vecteezy_e-wallet-digital-payment-online-transaction-with-woman_9646297.jpg" alt="">
            </div>
    </section>


    <div class="scroll-down">
        <a href="#system-features"><ion-icon name="chevron-down-sharp"></ion-icon></a>
    </div>
    
    
    <!----------------- SYSTEM FETURE SECTION ------------------->
    <section class="system-features" id="system-features">
        <h2>System Features</h2>

        <div class="feature-container">
            <div class="feature">
                <ion-icon name="lock-closed"></ion-icon>
                <h3>Secure Payment Processing</h3>
                <p>Safe payment gateway to enable credit or debit card payments for electricity bills.</p>
            </div>
    
            <div class="feature">
                <ion-icon name="cog"></ion-icon>
                <h3>Accurate Electricity Bill Generation</h3>
                <p>Safe payment gateway to enable credit or debit card payments for electricity bills.</p>
            </div>
    
            <div class="feature">
                <ion-icon name="card"></ion-icon>
                <h3>Payment Types</h3>
                <p>Accept the payment method customers prefer. Credit card or Bank transfer</p>
            </div>
    
            <div class="feature">
                <ion-icon name="hourglass"></ion-icon>
                <h3>Electricity Usage Monitoring</h3>
                <p>Users are able to keep tabs on their electricity consumption.</p>
            </div>
    
            <div class="feature">
                <ion-icon name="time"></ion-icon>
                <h3>Access to Payment History</h3>
                <p>Users are able to view their billing and payment history.</p>
            </div>
    
            <div class="feature">
                <ion-icon name="receipt"></ion-icon>
                <h3>Receipt Generation</h3>
                <p>Get a receipt for your payment.</p>
            </div>
        </div>
    </section>
    

    <!----------------- FOOTER ------------------->
    <footer>
        <div class="group-info">
            <h4>NWABUIS NKEMAKORNAM</h4>
            <p>20/1148</p>

            <h4>NTUMOBE EBUBE</h4>
            <p>20/1987</p>
        </div>
    </footer>


    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>