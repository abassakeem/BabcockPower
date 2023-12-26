<?php
//initialize variables to hold connection parameters
$dsn='mysql:host=localhost; dbname=abass';
$username='abass';
$password='Passwordab1'; 


try{
    //create an instance of the PDO class with the required parameters
    $db = new PDO($dsn,$username , $password);

    //set PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    //echo "connected to the database";

}catch (PDOException $ex){
    //display error message
        echo "connection failed";
    }


?>