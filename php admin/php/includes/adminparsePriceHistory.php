<?php

if(isset($_SESSION['username']) ){
  
 

  
   $statement = $db->prepare("SELECT * FROM price ORDER BY created_at DESC");
  
  $statement->execute();
    
  
  }



?>