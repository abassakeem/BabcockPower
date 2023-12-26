<?php 

if(isset($_POST['submit'])){
    $errors = array();

    $fields = array('new_password','confirm_new_password');

    $errors = array_merge($errors, check_empty_fields($fields));

    $fields_to_check_lenght= array('new_password' => 8,'confirm_new_password' => 8);
    $errors = array_merge($errors, check_min_lenght($fields_to_check_lenght));

  

    if(empty($errors)){

        $id = $_POST['user_id'];
        $password1 = $_POST['new_password'];
        $password2 = $_POST['confirm_new_password'];

        if($password1 != $password2){
            $result = "<p style='padding:20px; border: 1px solid gray; color:red;'> Please re-confirm password, Inputs do not match</p>";

        }else{
            try{
                //create SQL select statement to verify if email input is in the database

                $sql="SELECT id FROM userstable WHERE id =:id";

                $statement = $db->prepare($sql);
                $statement->execute(array(':id'=> $id));
                //check if record exists
                if($statement->rowCount() == 1){

                    $hashed_password = password_hash($password1, PASSWORD_DEFAULT);
  
                    //sql statement to update password;

                    $sqlUpdate = "UPDATE userstable SET passwords =:passwords WHERE id =:id";
                    $statement = $db->prepare($sqlUpdate);
                    //use PDO prepared to sanitize SQL statement
                    
                    $statement->execute(array(':passwords' => $hashed_password,':id'=> $id));
                    
                    $result="<p style='padding:20px; border: 1px solid gray; color:green;'> Password Reset Sucessful</p>";


                }else{
                    $result = "<p style='padding:20px; border: 1px solid gray; color:red;'> The email address provided does not exist in our database, please try another</p>";
                }
            
            }catch (PDOException $ex){
                $result = "<p style='padding:20px; border:1px solid gray; color:red;'> An error Occured: ".$ex->getMessage()."</p>";

            }
        }
    }else{
        if(count($errors) == 1){
            $result = "<p style='color:red;'> There was 1 error in the form<br>";
        }else{
            $result = "<p style='color:red;'> There were " .count($errors). " errors in the form<br>";
        }
    }
    

    



}
if(isset($_GET['id'])){
    $encoded_id = $_GET['id'];
    $decode_id = base64_decode($encoded_id);
    $id_array =explode("encodeuserid", $decoded_id);
    $id = $id_array[1];
    
}


?>