 <?php 
 

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

 $mail = new PHPMailer();
 try{
   $mail->SMTPOptions = array('ssl' => array('verify_peer' => false,'verify_peer_name'=> false,'allow_self_signed'=> true));
   $mail->SMTPDebug = 0; 
   $mail->IsSMTP(true);
   $mail->Host ='smtp.gmail.com';
   $mail->SMTPAuth = 'true';
    $mail->Username = "lanreabassab2@gmail.com";
    $mail->Password="passwordakeem";
   $mail->SMTPSecure =PHPMailer::ENCRYPTION_STARTTLS;
   $mail->Port = '587';
  //  $mail->addReplyTo("lanreabassab2@gmail.com")
  //  $mail->addCC("lanreabassab5@gmail.com")
  //  $mail->addReplyBCC("lanreabassab5@gmail.com")
   
   // $mail->Mailer ='smtp';
 
    //Auth info
   
   
   
    $mail->IsHTML(true);
    $mail->SingleTo = true;
   
    //Sender info
    $mail->setFrom("lanreabassab2@gmail.com");
    
    
   // $mail->addReplyTo('lanreabassab1@gmail.com');
 }catch (Exception $ex){
   echo "Message could not be sent. mailer Error: {$mail->ErrorInfo}";
 }
    
    
 
 

 ?>