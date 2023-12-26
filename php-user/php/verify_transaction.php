<?php
include 'session.php';
    $ref = $_GET['reference'];
    if($ref == ""){
        header("Location:javascript://history.go(-1)");//redirects user to previous page
    }
?>
<?php
    
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_92ccd4b5b7ad30ff489d75116f48579107adeefb",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
   // echo $response;
    $results = json_decode($response);
  }
  if($results->data->status == 'success'){
    $status = $results->data->status;
    $amount = $results->data->amount;
    
    $reference = $results->data->reference;
    $lname = $results->data->customer->last_name;
   
    $card_type = $results->data->authorization->card_type;
    $card_last4 = $results->data->authorization->last4;
    
    $customer_email = $results->data->customer->email;
    date_default_timezone_set('Africa/lagos');
    $Date_time=date('m/d/Y h:i:s a', time());
    $users_id =  $_SESSION['users_id'];
    $active_bill = 0;
    include 'database.php';
    include 'parseUpdateBillStatus.php';
    $statement = $db->prepare("INSERT INTO customer_details (statuses,users_id, reference,lastname, date_purchased, email_address, card_last4,card_type, amount) VALUES (:statuses,:users_id,:reference, :lname,:date_purchased, :email_address, :card_last4, :card_type,:amount)");
    
    $statement->bindParam(':statuses' , $status);
    $statement->bindParam(':reference' , $reference);
    $statement->bindParam(':amount' , $amount);
    $statement->bindParam(':lname', $lname);
    $statement->bindParam(':date_purchased', $Date_time);
    $statement->bindParam(':card_type', $card_type);
    $statement->bindParam(':email_address', $customer_email);
    $statement->bindParam(':card_last4', $card_last4);
    $statement->bindParam(':users_id', $users_id);
    
   // $statement->execute();
    echo "New records created successfully";
    //$statement->exec(array(':statuses'=> $status, ':reference'=> $reference, ':fullname' => $full_name,':date_purchased' => $Date_time, ':email_address' => $customer_email));
    // $stmt = $db->prepare("INSERT INTO customer_details (statuses, reference,fullname, date_purchased, email_address) VALUES (?,?,?,?,?)");
    // $stmt->bind_param("sssss",$status,$reference,$fullname,$Date_time,$customer_email);
    // $stmt->execute();
    if(!$statement->execute()){ 
         echo 'there was a problem in your code'. mysqli_error($db);
        
    }else{
       header("Location:successs.php");
    }
  
   } else{
      header("Location:error.php");
      exit;
  }
?>