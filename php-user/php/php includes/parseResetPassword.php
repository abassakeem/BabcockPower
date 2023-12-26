<?php 

if((isset($_SESSION['id']) || isset($_GET['user_identity'])) && !isset($_POST['updateProfileButton'])){
  if(isset($_GET['user_identity'])){
    $url_encoded_id = $_GET['user_identity'];
    $decode_id = base64_decode($url_encoded_id);
    $user_id_array = explode("encodeuserid",$decode_id);
    $id = $user_id_array[1];
  }else{
  $id = $_SESSION['id'];
}

  $sql = "SELECT * FROM userstable WHERE id = :id";
  $statement =$db->prepare($sql);
  $statement->execute(array(':id' => $id));

  while($rs = $statement->fetch()){
    $firstname = $rs['firstname'];
    $lastname= $rs['lastname'];
    $name= $rs['firstname'] . " " . $rs['lastname'];
    $meterid = $rs['meterid'];
    $email = $rs['email_address'];
    $zip_code = $rs['zip_code'];
    $phone_number = $rs['phone_number'];
    $address = $rs['addresss'];
    $dob= $rs['date_of_birth'];
    $date_joined = strftime("%b %d , %Y", strtotime($rs["created_at"]));
   $last_login = strftime("%b %d , %Y", time());
  }
  $user_pic ="../abass svg for project/".$phone_number.".jpg";
  $default = "../abass svg for project/person-circle.svg";

  if(file_exists($user_pic)){
    $profile_picture  = $user_pic;
  }else{
    $profile_picture= $default;
  }


  $encode_id = base64_encode("encodeuserid{$id}");
}elseif(isset($_POST['updateProfileButton'])){

  $errors = array(); 

  $fields = array('email_address','zip_code','phone_number','date_of_birth');

  $errors = array_merge($errors, check_empty_fields($fields));

  $fields_to_check_length = array('email_address' => 5,'phone_number' => 11,'zip_code' => 5);

  $error = array_merge($errors, check_min_lenght($fields_to_check_length));

  $errors = array_merge($errors, check_email($_POST));

  //validation to check if the file has a valid extension
  isset($_FILES['select_profile_picture']['name']) ? $profile_avatar= $_FILES['select_profile_picture']['name'] : $profile_avatar = null;
  if($profile_avatar != null){
    $errors = array_merge($error , isValidImage($profile_avatar));
  }

  

  $email= $_POST['email_address'];
  $zip_code = $_POST['zip_code'];
  $phone_number = $_POST['phone_number'];
  $date_of_birth= $_POST['date_of_birth'];
  $hidden_id = $_POST['hidden_id'];

  if(empty($errors)){
    try{
$sql = "UPDATE userstable SET email_address = :email_address, zip_code = :zip_code, phone_number = :phone_number, date_of_birth=:date_of_birth WHERE id = :id ";


$statement = $db->prepare($sql);
$statement->execute(array(':email_address'=>$email, ':zip_code'=>$zip_code,':phone_number'=>$phone_number, ':date_of_birth'=>$date_of_birth, ':id' => $hidden_id));


if($statement->rowCount() == 1 || uploadProfilePicture($phone_number)){
  $result = flashmessage('success','pass');
  $last_profile_update_time = time();
  
}else{
  $result = flashmessage("Nothing Happened , You have not made any changes");
}



    }catch(PDOException $ex){
      $result = flashMessage("An error occured in : " . $ex->getMessage());
    }
  }
 else{
   if(count($errors) == 1){
     $result = flashMessage("There was 1 error in the form<br>");
   }else{
     $result = flashMessage("there were " . count($errors) . "in the form");
   }
 }
}

?>











