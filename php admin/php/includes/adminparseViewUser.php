<?php

if(isset($_SESSION['username']) ){
  
 

  
   $statement = $db->prepare("SELECT * FROM userstable WHERE roles = 'user'  ORDER BY created_at DESC");
  
  $statement->execute();
    
  
  }



?>