<?php

include 'database.php';
include 'utility.php';
include 'sendemail.php';

 



if (isset($_POST['submit'])){

    $errors = array();
    //form validation
    $fields = array('firstname','lastname','meterid','date_of_birth','email_address','password','phone_number','address','state','zip_code');
    //call the function to check empty field and merge the return data into the error array
    $errors = array_merge($errors, check_empty_fields($fields));

    //fields that require checking for minumum lenght

    $fields_to_check_lenght= array('firstname' => 3,'lastname' => 3,'meterid' => 10,'email_address' => 5,'password' => 8,'phone_number' => 11,'address' => 10,'zip_code' => 5);
    //email validation / merge the return data into errors array


    $errors = array_merge($errors, check_min_lenght($fields_to_check_lenght));
    $errors = array_merge($errors , check_email($_POST));



    $meter_id=$_POST['meterid'];
    $email_address=$_POST['email_address'];
    $phone_number=$_POST['phone_number']; 
    $addresss=$_POST['address'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $dob=$_POST['date_of_birth']; 
    $passwords=$_POST['password']; 

        if(checkDuplicateInput("userstable","meterid",$meter_id, $db)){
            $result = flashMessage("Meter ID is being used by another customer");
        }
        if(checkDuplicateInput("userstable","addresss",$addresss, $db)){
            $result = flashMessage("Address is being used by another customer");
        }
        if(checkDuplicateInput("userstable","email_address",$email_address, $db)){
            $result = flashMessage("Email Address  is being used by another customer");
        }
    
    //check if the error array is empty, if yesprocess form data and insert record

    elseif (empty($errors)){
        //hashing the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        //end of hash
        
        $states=$_POST['state'];
        $zip_code=$_POST['zip_code'];
        
        try{
            $sqlInsert = "INSERT INTO userstable (firstname,lastname,meterid,date_of_birth,email_address,passwords,phone_number,addresss,states,zip_code,created_at) VALUES (:firstname,:lastname,:meterid,:dob,:email_address,:passwords,:phone_number,:addresss,:states,:zip_code, now())";

        $statement= $db->prepare($sqlInsert);
        $statement->execute(array(':firstname' => $firstname,':lastname'=> $lastname,':meterid' => $meter_id,':dob' => $dob, ':email_address' => $email_address,':passwords' => $hashed_password,':phone_number' => $phone_number,':addresss' => $addresss,':states' => $states,':zip_code' => $zip_code));
        
        if($statement->rowCount() == 1){
            //get last inserted id
            $user_id = $db->lastInsertId();
            //encode id
            $encode_id = base64_encode("encodeuserid{$user_id}");
            //prepare email body 
            $mail_body = '<html>
            <body style="background-color:#CCCCCC; text-align: center; border-radius: 20px; color:#000; font-family: Arial, Helvetica, sans-serif;
                                line-height:1.8em;">
            <h2>User Authentication:</h2>
            <p>Dear '.$firstname.'<br><br>Thank you for registering, please click on the link below to
                confirm your email address</p>
            <p><a href="http://localhost/works/login%20sisnin/activate.php?id='.$encode_id.'"> Confirm Email</a></p>
            <p><strong>&copy;2021 AEE</strong></p>
            </body>
            </html>';
            
                $mail->addAddress($email_address);
                $mail->Subject = " AEE";
                $mail->Body ="$mail_body";
                $mail->Send();

                if(!$mail->Send()){
                    $result1 = flashMessage('Sending of Confirmationemail  failed');
                }else{
                    $result1 = flashMessage("Congratulations $firstname,Confirmation Email sent", 'pass');
                }




            $result = flashMessage("registration Successful", 'pass');

        }
        }catch (PDOException $ex){
            $result = flashMessage("ERROR Registration fail:" .$ex->getMessage());

           

        }
    }else{
        if(count($errors) == 1){
            $result = flashMessage("There was 1 error in the form");

            

        }else{
            $result = flashMessage("There were " . count($errors). " errors in the form");
    
        }
}

   
}
//email Activation 

elseif(isset($_GET['id'])){

    $encoded_id = $_GET['id'];
    $decode_id = base64_decode($encoded_id);
    $user_id_array =explode("encodeuserid", $decode_id);
    $id = $user_id_array[1];

    $sql = "UPDATE userstable SET activated = :activated where id = :id AND activated='1'";

    $statement = $db->prepare($sql);
    $statement->execute(array(':activated' => "1", ':id' => $id));

    if($statement->rowCount()==1){
        $result = '<h2 style="color: lightblue; text-align:center;"> Email Confirmend</h2>
        <p text-center text-primary>Your Account has been verified, you can now<a href="signin.php" class="btn btn-outline-primary">LOGIN</a> with your username and password</p>';
    }else {
        $result = "<p style='color:red;'> NO CHANGES MADE PLEASE CONTACT SITE ADMIN, IF YOU HAVE NOT CONFIRMED YOUR EMAIL <p>";
}

  
}

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
     <!-- end of fonts -->
      <!-- start of style for external css-->
    <link rel="stylesheet" href="../css/activate.css">
    <!-- end of style for external css-->
      <!-- start of style for header and footer-->
    <link rel="stylesheet" href="../css/footer and header.css">
    <!-- end of style for header and footer-->
    <!-- start of style for dashboard navbar-->
    <link rel="stylesheet" href="../css/dashboard navbar.css">
    <!-- end of style for dashboard navbar-->
</head>
<body>
    <div >
        <header class="container-fluid">
            <nav class="navbar ">
                <div class="container-fluid">
                  <a href="dashboard.html" class="navbar-brand sign-in-logo">AEE</a>
                  <a href="help.html" class="d-flex help">Help</a>
                </div>
              </nav>
        </header>
        
        
        <section>
        <h1 class="text-center confirm-email mt-3">CONFIRM EMAIL</h1>
        <div class="text-center"><?php if(isset($result)) echo $result; ?></div>
        </section>
        </div>
        </body>
        </html>