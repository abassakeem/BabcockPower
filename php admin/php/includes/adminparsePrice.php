<?php 

if(isset($_POST['submit']) ){
    $price = $_POST['new_price'];

    $sql = "INSERT INTO price (price,created_at) VALUES (:price,now()) ORDER BY created_at DESC";
    $statement= $db->prepare($sql);
    $statement->execute(array(':price'=>$price));
    if($statement->rowCount() == 1){
        
        
       $result =flashMessage('Price Updated', 'pass');
}else{
$result =flashMessage('Price failed to Update,Try again');
   
}
}

?>