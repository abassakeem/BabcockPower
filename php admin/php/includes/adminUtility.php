<?php
function check_empty_fields($fields){

//initialize an array to store any error message from the form
$errors = array();

//form validation


foreach($fields as $field){
    if(!isset($_POST[$field]) || $_POST[$field] == NULL){
        $errors[]= $field . " is a required field";
    }
}
return $errors;
}   

function check_min_lenght($fields_to_check_lenght){
    //initialize an array to store any error message from the form
    $errors = array();

    foreach($fields_to_check_lenght as $field => $minimum_lenght_required){
        if(strlen(trim($_POST[$field])) < $minimum_lenght_required){
            $errors[]= $field . " is too short, must be {$minimum_lenght_required} characters long";
        }
    }
    return $errors;
     
}


function check_email($data){
    $errors = array();
    $key='email_address';
    //check if the key email exists in the data array
    if(array_key_exists($key,$data)){

        //check if the email field has a value

        if($_POST[$key] != null){

            //remove all illegal charactrs from email

            $key= filter_var($key, FILTER_SANITIZE_EMAIL);

            //Check if input is a valid email address
            if (filter_var($_POST[$key], FILTER_VALIDATE_EMAIL) === false){
                $errors[]= $key . " is not a valid email";
            }

        }
    }
    return $errors;
}



function show_errors($form_errors_array){
    $errors =  "<p><ul style='color:red;'>";

   // $result .= " style='color:red;'>";
    //loop through error array and display all items
    foreach($form_errors_array as  $the_error){
        $errors .= "<li> {$the_error} </li>";
    }
    $errors .= "</ul></p>";
    return $errors;

    }

    function flashMessage($message, $passOrFail ="Fail"){
        if($passOrFail == "pass" || $passOrFail == "Pass"){
            $data ="<p style='padding:20px;text-align:center; color:magenta;border: 1px solid magenta; border-radius:20px;';>{$message}<br></p>";

        }elseif($passOrFail == "fail" || $passOrFail == "Fail"){
            $data = "<p style='padding:20px;color:red;text-align:center;border: 1px solid red; border-radius:20px ;'>{$message}<br>";

        }else{
            echo "ERROR: Invalid input for Pass or Fail function parameter";
        }
        return $data;
    }
    function toastMessage($message){
        
      
            $data =" <div aria-live ='polite' aria-atomic='true' class='row justify-content-center align-items-center w-100 bg-light'>
            <div class='toast-container'>
            <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
              <div class='toast-header'>
               
                <strong class='me-auto'>AEE</strong>
                <small class='text-muted'></small>
                <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
              </div>
              <div class='toast-body text-dark'>
              {$message}
              </div>
              </div>
            </div>";


        

       
        
        return $data;
    }

    function redirectTo($page){
        header("location:{$page}.php");
    }
    function checkDuplicateInput($table,$column_name,$value,$db){
       
        try{
            $sql = "SELECT * FROM" .$table. "WHERE" .$column_name."=:$column_name";
            $statement = $db->prepare($sql);
            $statement->execute(array(':$column_name'=>$value));

            if($row = $statement->fetch()){
                return true;
            }
            return false;
        }catch (PDOException $ex){

        }
   
    }
    //cookie function

    function rememberMe($user_id){
        $encryptCookieData = base64_encode("UaQteh5i4y3dntstemYODEC{$user_id}");
        //cookie set to expire in about 30 days
        setcookie("rememberUserCookie", $encryptCookieData,time()+60*60*24*100, "/");
    }

    function isCookieValid($db){
        $isvalid = false;

        if(isset($_COOKIE['rememberUserCookie'])){
            //decode cookies and extract  user id

            $decryptCookieData = base64_decode($_COOKIE['rememberUserCookie']);
            $user_id = explode("UaQteh5i4y3dntstemYODEC", $decryptCookieData);
            $userID = $user_id[1];

            //check if id retrived from the cookie exists

            $sql= "SELECT * FROM userstable WHERE id = :id";
            $statement = $db->prepare($sql);
            $statement->execute(array(':id' => $userID));
            if ($row = $statement-> fetch()){
                $id = $row['id'];
                $username = $row['username'];

               // create the user session variable
               $_SESSION['id'] = $id;
               $_SESSION['username'] = $username;
               $isvalid = true;
            }else{
                //cookie id is invalid destroy session and logout user

                $isValid = false;
                $this->signout();
            }
        }
        return $isValid;
    }

    function signout(){
        unset($_SESSION['username']);
        unset($_SESSION['id']);

        if(isset($_COOKIE['rememberUserCookie'])){
            unset($_COOKIE['rememberUserCookie']);
            setcookie('rememberUserCookie', null, -1, '/');
    }
    session_destroy();
    session_regenerate_id(true);
    redirectTo("adminSignin");
}

function guard(){
        $isValid = true;
        $inactive = 60 *10; // 10 minutes

        $fingerprint = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);

        if((isset($_SESSION['fingerprint']) && $_SESSION['fingerprint'] != $fingerprint)){
            $isValid = false;
            signout();
        }elseif((isset($_SESSION['last_active']) && (time() - $_SESSION['last_active']) > $inactive) && $_SESSION['username']){
            $isValid = false;
            signout();

        }else{
            $_SESSION['last_active'] = time();

        }
        return $isValid;
    }
    function isValidImage($file){

        $errors = array();
        //splt file into an array using dot 
        $part = explode(".",$file);

        //target the last element in the array
        $extension = end($part);

        switch (strtolower($extension)){
            case 'jpg':  
            case 'gif':
            case 'bmp':
            case 'png':
            return $errors;
        }
        $errors[] = $extension ." is not a valid image";  
        $_SESSION['errors']= $errors; 
        return $errors;
    }

    function uploadProfilePicture($phone_number){
        $isImageMoved= false;
        if($_FILES['select_profile_picture']['tmp_name']){
            $temp_file =$_FILES['select_profile_picture']['tmp_name'];
            $ds= DIRECTORY_SEPARATOR; // uploads/
            $profile_avatar_name= $phone_number.".jpg";

            $path = "../abass svg for project/".$profile_avatar_name;
            

            if(move_uploaded_file($temp_file,$path)){
                $isImageMoved = true;
            }
        }
        return $isImageMoved;
    }
    function login($id , $user, $rememberME){
        $_SESSION['id']= $id;
        //$_SESSION['users_id']= $users_id;
        $_SESSION['username']= $user;
         

        $fingerprint = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
        $_SESSION['last_active'] = time();
        $_SESSION['fingerprint'] = $fingerprint;

        if($remember ==="yes"){
            rememberMe($id);
        }
        redirectTo("adminDashboard");

    }
    




?>