<?php



if(isset($_POST['submit'])){
    
  

    
    $errors = array();

    $fields = array('current_password','new_password','confirm_new_password');

    $errors = array_merge($errors, check_empty_fields($fields));

    $fields_to_check_lenght= array('current_password' => 8,'new_password' => 8,'confirm_new_password' => 8);
    $errors = array_merge($errors, check_min_lenght($fields_to_check_lenght));

    

    if(empty($errors)){
        $id - $_POST['hidden_id'];
        $current_password = $_POST['current_password'];
        $password1 = $_POST['new_password'];
        $password2 = $_POST['confirm_new_password'];

        if($password1 != $password2){
            $result = "<p style='padding:20px; border: 1px solid gray; color:red;'> Please re-confirm password, Inputs do not match</p>";

        }else{
            try{
                $sql = "SELECT passwords FROM userstable WHERE id =:id";
                $statement = $db->prepare($sql);
                $statement->execute(array(':id'=> $id));
                if($row = $statement->fetch()){
                    $password_from_db = $row['passwords'];

                    if(password_verify($current_password, $password_from_db)){

                        $hashed_password = password_hash($password1, PASSWORD_DEFAULT);
                        $sqlUpdate = "UPDATE userstable SET passwords =:passwords WHERE id =:id";
                        $statement = $db->prepare($sqlUpdate);
                        //use PDO prepared to sanitize SQL statement
                        
                        $statement->execute(array(':passwords' => $hashed_password,':id'=> $id));
                        if($statement->rowCount() === 1){
                            $result = flashMessage('Password has been updated successfully', 'pass');
                        }else{
                            $result = flashMessage('No changes saved');
                        }

                    }else{
                        $result = flashMessage('old password is incorrect, please try again');
                    }
                    
                }
                else{
                    //put in sweetalert that says "invalid user" signed out
                    signout();
                }
            }catch (PDOException $ex){
                $result = "<p style='padding:20px; border:1px solid gray; color:red;'> An error Occured: ".$ex->getMessage()."</p>";

            }
        }
    }else{
        if(count($errors) == 1){
            $result = "<p style='color:red;'> There was 1 error in the form<br>";
        }else{
            $result = "<p style='color:red;'> There were" .count($errors). " errors in the form<br>";
        }
    
    }



    
    }

    

    
?>