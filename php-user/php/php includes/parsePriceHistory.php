<?php


 

  
  $statementss = $db->prepare("SELECT * FROM price ORDER BY created_at DESC LIMIT 5");

  $statementss->execute();
  
  


?>