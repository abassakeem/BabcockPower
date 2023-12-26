<?php 
include 'session.php';
include 'database.php';

include 'utility.php';
 
$users_id = $_SESSION['users_id'];
$session_reference = $_GET['reference'];
 




 $statement = $db->prepare("SELECT * FROM customer_details WHERE reference = :session_reference ORDER BY date_purchased DESC LIMIT 1");
$statement->bindParam(':session_reference',$session_reference);
$statement->execute();
  
 ?>