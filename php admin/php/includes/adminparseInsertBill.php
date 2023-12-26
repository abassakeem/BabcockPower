<?php 

if(isset($_POST['submit']) ){
    $price = $_POST['new_price'];
    $users_id = $_GET["users_id"];
    $bill_id = "BILL-".rand(1000,10000);

    $sql = "INSERT INTO bill (bill_id,users_id,bill_price,active_bill) VALUES (:bill_id,:users_id,:price,1)  ORDER BY created_at DESC";
    $statement= $db->prepare($sql);
    $statement->execute(array(':bill_id' => $bill_id,':price'=>$price, ':users_id'=> $users_id,));
    if($statement->rowCount() == 1){
        
        
       $result =flashMessage('Bill sucessfully created', 'pass');
}else{
$result =flashMessage('Billing failed ,Try again');
   
}
}

?>