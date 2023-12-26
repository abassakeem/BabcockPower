<?php
if(isset($_POST['passwordRecoverBtn'])){
    $errors = array();

    $fields = array('email_address');
    $errors = array_merge($errors, check_empty_fields($fields));

    $fields_to_check_lenght= array('email_address' => 5);
    $errors = array_merge($errors, check_min_lenght($fields_to_check_lenght));

    $errors = array_merge($errors , check_email($_POST));

    if(empty($errors)){
        $email =$_POST['email_address'];

        try{
            $sql = "SELECT * FROM userstable WHERE email_address = :email;";

            $statement =$db->prepare($sql);

            $statement -> execute(array(':email'=> $email));

            if($rs = $statement->fetch()){
                
                $firstname = $rs['firstname'];
                $email_address = $rs['email_address'];
                $user_id = $rs['id'];
                $encode_id= base64_encode("encodeuserid{$user_id}");

                $mail_body = '<html>
                <body style="background-color:#CCCCCC; text-align: center; border-radius: 20px; color:#000; font-family: Arial, Helvetica, sans-serif;
                                    line-height:1.8em;">
                <h2>User Authentication:</h2>
                <h2 style="color:blue;">AEE:</h2>
                <p>Dear '.$firstname.'<br><br>To reset your password, please click on the link below </p>
                <p><a href="http://localhost/works/1project/php-user/php/passwordrecoverylink.php?id='.$encode_id.'"> Reset Password</a></p>
                <p><strong>&copy;2021 AEE</strong></p>
                </body>
                </html>';

                
                $mail->addAddress($email_address);
                $mail->Subject = " AEE";
                $mail->Body ="$mail_body";
                $mail->Send();

                if(!$mail->Send()){
                    $result1 = flashMessage("Bad news $firstname, Sending of Password reset email  failed");
                }else{
                    $result1 = flashMessage("Congratulations $firstname, Password reset Email sent", 'pass');
                }


            
            }else{
                $result = flashMessage("The email address provided does not exist in our database,please try again.");
            }
        }catch (PDOException $ex){
            $result = flashMessage("An error occured: " .$ex->getMessage());
        }
    }else{
        if(count($errors) == 1){
            $result = flashMessage("There was 1 error in the form");

            

        }else{
            $result = flashMessage("There were " . count($errors). " errors in the form");
    
        }

}
}
?>