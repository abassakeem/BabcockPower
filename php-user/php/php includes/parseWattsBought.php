<?php

   $users_id = $_SESSION['users_id'];
 

  
   $stmt1 = $db->prepare("SELECT watts FROM bill WHERE users_id = :users_id ORDER BY id DESC LIMIT 1" );
   $stmt1->bindParam(':users_id',$users_id);
  $stmt1->execute();
  
                            
 
 

?>