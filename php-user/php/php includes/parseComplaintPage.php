<?php
include 'sendemail.php';



if (isset($_POST['submit'])){


$errors = array();
//form validation
$fields = array('comment' ,'meter_id','email_address');
//call the function to check empty field and merge the return data into the error array
$errors = array_merge($errors, check_empty_fields($fields));

//fields that require checking for minumum lenght

$fields_to_check_lenght= array('comment' => 3,'email_address' => 3,'meter_id' => 10);
//email validation / merge the return data into errors array


$errors = array_merge($errors, check_min_lenght($fields_to_check_lenght));
$errors = array_merge($errors , check_email($_POST));


$meter_id=$_POST['meter_id'];
$comment=$_POST['comment'];
$complaint_id = 'AEE-COMP-'. rand(1,100000000);
$email_address=$_POST['email_address'];

if (empty($errors)){
    try{
        $sqlInsert = "INSERT INTO users_complaint (complaint_id,users_id,meter_id,email_address,comment,created_at) VALUES (:complaint_id,:users_id,:meter_id,:email_address,:comment, now())";

    $statement= $db->prepare($sqlInsert);
    $statement->execute(array('complaint_id'=>$complaint_id,':users_id' => $_SESSION['users_id'],':meter_id' => $meter_id,':email_address' => $email_address, ':comment' => $comment));
    if($statement->rowCount() == 1){

        $mail_body = '<html>
        <body style="width: 600px; margin: 0 auto; text-align: justify;"></body>
            <div style=" padding: 40px;margin-top: 40px;  border-radius: 20px; color:#000; font-family: Arial, Helvetica, sans-serif;
                                line-height:1.8em;border: 14px solid #0d6efd;border-radius: 90px">
        <h2 style="text-align: center">Email Sent successfully </h2>
        <p>Dear valued Customer,We at AEE have gotten your complaint and are working on it .<br> We will get back to you as soon as possible<br>Thank you and have a nice day.</p>
        
        <p><strong>&copy;2021 AEE</strong></p>
        <div></div>
        </body>
        </html>';
        
            $mail->addAddress($email_address);
            $mail->Subject = " AEE";
            $mail->Body ="$mail_body";
            //$mail->Send();

            if($mail->Send()){
                $result1 = flashMessage(" Email sent", 'pass');
            }else{ 
                $result1 = flashMessage('Sending of email  failed');
               
            }


        $result = flashMessage("Complaint Sent Successfully", 'pass');
        
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
?>