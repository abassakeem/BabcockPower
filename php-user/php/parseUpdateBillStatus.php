<?php 
include 'adminDatabase.php';
$statement1 = $db->prepare("SELECT bill_id FROM bill WHERE users_id = :users_id ORDER BY created_at DESC");
$statement1->bindParam(':users_id',$users_id);
$statement1->execute();
while($rs = $statement1->fetch()){
    $bill_id = $rs['bill_id'];
    echo $bill_id;





$sql = "UPDATE bill SET active_bill= :active_bill WHERE bill_id = :bill_id";
    
$statement2 = $db->prepare($sql);
$statement2->execute(array(':active_bill' => 0, ':bill_id'=>$bill_id));

   } 
?>