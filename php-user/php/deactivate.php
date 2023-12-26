<?php
// include 'database.php';
// include 'utility.php';
// include 'sendemail.php';


if(isset($_POST['deleteAccountBtn'])){
    $id = $_POST['hidden_id'];
    try{
        //Retrieve user information from the database
        $sql ="SELECT * FROM userstable WHERE id= :id";
        $statement = $db->prepare($sql); 
        $statement->execute(array(':id' => $id));

        if($row = $statement->fetch()){
            //deactivate account
            $firstname = $row['firstname'];
            $meterid = $row['meterid'];
            $email_address = $row['email_address'];
            $users_id = $row['id'];
            $deactivateQuery = $db->prepare("UPDATE userstable SET activated = :activated WHERE id = :id");
            $deactivateQuery->execute(array(':activated' => 0, ':id' => $users_id));

            if($deactivateQuery->rowCount() === 1 ){
                // insert record into the deleted users  table
                $insertRecord = $db->prepare("INSERT INTO trash(user_idd, deleted_at) VALUES(:id, now())" );

                $insertRecord->execute(array(':id' => $userid));
                if($insertRecord->rowCount() === 1){
                    $mail_body = '<html>
                    <body style="background-color:#CCCCCC; text-align: center; border-radius: 20px; color:#000; font-family: Arial, Helvetica, sans-serif;
                                        line-height:1.8em;">
                    <h2>User Authentication:</h2>
                    <p>Dear '.$firstname.'<br><br> you have requested to deactivate your account,your account information will be kept for 14 days.<br>If you wish to continue using this system , login within the next 14 days to reactivate your account or it will be permanently deleted</p>
                    
                    <p><a href="http://localhost/works/login%20sisnin/signin.php"> Sign in</a></p>
                    <p><strong>&copy;2021 AEE</strong></p>
                    </body>
                    </html>';
                    $mail->addAddress($email_address);
                    $mail->Subject = " AEE";
                    $mail->Body ="$mail_body";
                    $mail->Send();
    
                    if(!$mail->Send()){
                        $result1 = flashMessage('Sending of Confirmation email  failed');
                    }else{
                        $result1 = flashMessage("Dear $firstname, your account information will be kept for 14 days.<br>If you wish to continue using this system , login within the next 14 days to reactivate your account or it will be permanently deleted", 'pass');
                    }

                }else{
                    $result = flashMessage("An error occured: " .$ex->getMessage());

                }
            }else{
                $result = flashMessage('Could not complete the operation please try again');

            }
        }else{
            signout();
        }
       

    }catch(PDOException $ex){
        $result = flashMessage("An error occured: " .$ex->getMessage());
    }

}
?>