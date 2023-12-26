<?php 
include 'session.php';
include 'database.php';

include 'utility.php';

//validate the form
if(isset($_POST['submit'])){
$errors = array();

//validtae




$fields = array('meterid','password');
//call the function to check empty field and merge the return data into the error array
$errors = array_merge($errors, check_empty_fields($fields));



if(empty($errors)){
    $user = $_POST['meterid'];
    $password = $_POST['password'];

isset($_POST['remember_me']) ? $remember = $_POST['remember_me'] : $remember = ""; 

    $sql= "SELECT * FROM userstable WHERE meterid = :meterid";
    $statement = $db->prepare($sql);
    $statement->execute(array(':meterid' => $user));

    if($row = $statement->fetch()){
        $id=$row['id'];
       $users_id=$row['users_id'];
       $_SESSION['users_id']=$row['users_id'];
        $hashed_password =$row['passwords'];
        $meterid = $row['meterid'];
        $activated = $row['activated'];


        //change to not activated to be able to login since youve not fixed the mailer


        if($activated === '0'){
            if(checkDuplicateInput('trash', 'user_idd' , $id, $db)){
                $db->exec("UPDATE userstable SET activated = ':1' WHERE id =$id LIMIT 1");

                //remove user from trash

                $db->exec ("DELETE FROM trash WHERE user_id = $id LIMIT 1");

                //log user in
                login($id,$user, $remember);



            }else{
                $result = flashMessage('Please activate your account');
            }
            //$result = flashMessage('Please activate your account');
            
        }else{
            if (password_verify($password, $hashed_password)){
               login($id,$user, $remember);
            }else{
                $result = flashMessage("You have entered and Invalid password");
                
            }
;        }

       
    }else{
    $result = flashMessage("You have entered and invalid username ");
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