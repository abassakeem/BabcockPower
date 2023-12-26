<?php

if(isset($_SESSION['id']) || isset($_GET['user_identity']) ){
  
  if(isset($_GET['user_identity'])){
    $url_encoded_id = $_GET['user_identity'];
    $decode_id = base64_decode($url_encoded_id);
    $user_id_array = explode("encodeuserid",$decode_id);
    $id = $user_id_array[1];
  }else{
    $id = $_SESSION['id'];
    $users_id = $_SESSION['users_id'];
 
  }


  
   $statement = $db->prepare("SELECT * FROM customer_details WHERE users_id = :users_id ORDER BY date_purchased DESC");
  $statement->bindParam(':users_id',$users_id);
  $statement->execute();
    
  
  }



?>