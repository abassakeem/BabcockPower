<?php 
$id = $_GET['id'];
if(isset($_POST['submit']) ){
    $id = $_GET['id'];
     $response = $_POST['response'];
     $status="fulfilled";
    $mail_body = '<html>
    <body style="background-color:#CCCCCC; text-align: center; border-radius: 20px; color:#000; font-family: Arial, Helvetica, sans-serif;
                        line-height:1.8em;">
    <h2>User Authentication:</h2>
    <p>Dear Customer,<br>Your Complaint has been seen and this is our response'.$response.'"> Confirm Email</a></p>
    <p><strong>&copy;2021 AEE</strong></p>
    </body>
    </html>';
        $email_address= $row['email_address'];
        $mail->addAddress($email_address);
        $mail->Subject = "AEE";
        $mail->Body ="$mail_body";
        $mail->Send();

        if($mail->Send()){
             $result1 = flashMessage("Congratulations Confirmation Email sent", 'pass');
        }else{
            // $result1 = flashMessage('Sending of Confirmation Email  failed');
            // $sql="UPDATE users_complaint SET statuss = :statuss,response = :response WHERE id = :id";
            // $statement = $db->prepare($sql);
            // $statement->execute(array(':response' => $response,':statuss'=>$status,':id'=>$id));
           
       }

 }
?>