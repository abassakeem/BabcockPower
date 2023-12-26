<?php 
$msg="mail sent";

$msg = wordwrap($msg,70);
mail("lanreabassab5@gmail.com","my subject", $msg);
?>