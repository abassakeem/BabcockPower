<?php


 
include 'includes/adminSendemail.php';


if (isset($_POST['submit'])){

    $errors = array();
    //form validation
    $fields = array('firstname','lastname','username','date_of_birth','email_address','password','phone_number','address','state','zip_code');
    //call the function to check empty field and merge the return data into the error array
    $errors = array_merge($errors, check_empty_fields($fields));

    //fields that require checking for minumum lenght

    $fields_to_check_lenght= array('firstname' => 3,'lastname' => 3,'email_address' => 5,'password' => 8,'phone_number' => 11,'address' => 10,'zip_code' => 5);
    //email validation / merge the return data into errors array


    $errors = array_merge($errors, check_min_lenght($fields_to_check_lenght));
    $errors = array_merge($errors , check_email($_POST));


    $users_id = 'AEE' . rand(1000,1000000);
    $meterid=$_POST['meterid'];
    $username=$_POST['username'];
    $email_address=$_POST['email_address'];
    $phone_number=$_POST['phone_number']; 
    $addresss=$_POST['address'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $dob=$_POST['date_of_birth']; 
    $passwords=$_POST['password']; 
    $role=$_POST['role'];

        if(checkDuplicateInput("userstable","meterid",$meterid, $db)){
            $result = flashMessage("meterid is being used by another customer");
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
            $sqlInsert = "INSERT INTO userstable (users_id,firstname,lastname,username,roles,meterid,date_of_birth,email_address,passwords,phone_number,addresss,states,zip_code,created_at) VALUES (:users_id,:firstname,:lastname,:username,:roles,:meterid,:dob,:email_address,:passwords,:phone_number,:addresss,:states,:zip_code, now())";

        $statement= $db->prepare($sqlInsert);
        $statement->execute(array(':users_id'=>$users_id,':firstname' => $firstname,':lastname'=> $lastname,':username'=>$username,':meterid' => $meterid,':dob' => $dob, ':email_address' => $email_address,':passwords' => $hashed_password,':roles' => $role,':phone_number' => $phone_number,':addresss' => $addresss,':states' => $states,':zip_code' => $zip_code));
        
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
                $mail->Subject = "AEE";
                $mail->Body ="$mail_body";
                $mail->Send();

                if($mail->Send()){
                     $result1 = flashMessage("Congratulations $firstname,Confirmation Email sent", 'pass');
                }else{
                    $result1 = flashMessage('Sending of Confirmation Email  failed');
                   
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
    

    $sql = "UPDATE userstable SET activated = :activated where id = :id AND activated='0'";

    $statement = $db->prepare($sql);
    $statement->execute(array(':activated' => "1", ':id' => $id));

    if($statement->rowCount()==1){
        $result = '<h2 style="color: lightblue; text-align:center;"> Email Confirmend</h2>
        <p text-center text-primary>Your Account has been verified, you can now<a href="signin.php" class="btn btn-outline-primary">LOGIN</a> with your meterid and password</p>';
    }else {
        $result = "<p style='color:red;'> NO CHANGES MADE PLEASE CONTACT SITE ADMIN, IF YOU HAVE NOT CONFIRMED YOUR EMAIL <p>";
}

  
}

?>  
