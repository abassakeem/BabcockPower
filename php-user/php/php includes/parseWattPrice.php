<?php
//include 'adminDatabase.php';

// if(isset($_SESSION['username']) ){
  
 

  
   $stmt = $db->prepare("SELECT price FROM price ORDER BY id DESC LIMIT 1" );
  
  $stmt->execute();
  
                            
 
 // }


?>