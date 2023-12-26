<?php 
$page1 = "adminViewComplaints.php";
include "includes/adminDatabase.php";
include 'includes/adminSendemail.php';



    $complaint_id = $_GET['complaint_id'];
$sql =("SELECT * FROM users_complaint  WHERE complaint_id = :complaint_id");
$statement =$db->prepare($sql);
$statement->execute(array(':complaint_id' => $complaint_id));
            


while($row = $statement->fetch()){
                    
$email_address= $row['email_address'];
$comment = $row['comment'];  


}
$complaint_id = $_GET['complaint_id'];
if(isset($_POST['submit']) ){
    $complaint_id = $_GET['complaint_id'];
     $response = $_POST['response'];
     $status="fulfilled";
    $mail_body = '<html>
    <body style="width:6000px; ; text-align: justify;">
    <h1 style="color: #0d6efd; font-weight: bold">AEE</h1>
        <div style=" padding: 8px;  color:#000; font-family: Arial, Helvetica, sans-serif;
                                line-height:1.8em;">
    <h2>Complaint Response</h2>
    <h4> Reply to complaint ' .$complaint_id.' :</h4>
    <p style="width: 350px;">Dear Customer,<br>Your Complaint has been seen and this is our response: <br><b style="font-size: 20px; margin-bottom: 10px; border-left:3px solid #0d6efd; border-right:3px solid #0d6efd; padding:2px ;border-radius: 20px; margin-top: 5px; margin-bottom: 5px";> "'.$response.'" </b><br>Thank you</a></p>
    <p><strong>&copy;2021 AEE</strong></p>
    </body>
    </html>';
        
        $mail->addAddress($email_address);
        $mail->Subject = "AEE";
        $mail->Body ="$mail_body";
        //$mail->Send();

        if($mail->Send()){
             $result = flashMessage(" Email sent", 'pass');
             $sql="UPDATE users_complaint SET statuss = :statuss,response = :response WHERE complaint_id = :complaint_id";
            $statement = $db->prepare($sql);
            $statement->execute(array(':response' => $response,':statuss'=>$status,':complaint_id'=>$complaint_id));
        }else{
            $result = flashMessage('Sending of Confirmation Email  failed');
            
           
       }

 }


 
    
?>