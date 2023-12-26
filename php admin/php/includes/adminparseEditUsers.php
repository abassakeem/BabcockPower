<?php 
$page1 = "adminViewUsers.php";
$users_id = $_GET["users_id"];


$firstname = "";
$lastname= "";
$name= "";
$meterid = "";
$email = "";
$zip_code = "";
$phone_number = "";
$address = "";
$dob= "";
$state= "";
$role= "";
$status= "";

    $sql = "SELECT * FROM userstable WHERE users_id = :users_id";
    $statement =$db->prepare($sql);
    $statement->execute(array(':users_id' => $users_id));
  
    while($rs = $statement->fetch()){
      $firstname = $rs['firstname'];
      $lastname= $rs['lastname'];
      $name= $rs['firstname'] . " " . $rs['lastname'];
      $meterid = $rs['meterid'];
      $email = $rs['email_address'];
      $zip_code = $rs['zip_code'];
      $phone_number = $rs['phone_number'];
      $address = $rs['addresss'];
      $dob= $rs['date_of_birth'];
      $state= $rs['states'];
      $role= $rs['roles'];
      $status= $rs['activated'];
      $username= $rs['username'];
      $password= $rs['passwords'];

     
      
     
    }
    if(isset($_POST['submit'])){
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $meterid= $_POST['meterid'];
    $username= $_POST['username'];
    $states= $_POST['states'];
    $email= $_POST['email_address'];
    $addresss= $_POST['address'];
    $roles= $_POST['role'];
    $activated= $_POST['status'];
    $password= $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $zip_code = $_POST['zip_code'];
    $phone_number = $_POST['phone_number'];
    $date_of_birth= $_POST['date_of_birth'];
    $users_id = $_GET["users_id"];

    $sql = "UPDATE userstable SET firstname= :firstname,lastname = :lastname,meterid = :meterid,activated = :activated, username = :username,addresss = :addresss ,roles = :roles,email_address = :email_address,passwords = :passwords, zip_code = :zip_code, phone_number = :phone_number, date_of_birth  = :date_of_birth, states = :states WHERE users_id = :users_id ";
    
$statement = $db->prepare($sql);
$statement->execute(array(':firstname' => $firstname,':lastname'=>$lastname,':meterid'=>$meterid,':activated'=>$activated,':username'=>$username,':states'=>$states,':addresss'=>$addresss,':roles'=>$roles,':passwords'=>$hashed_password,':email_address'=>$email, ':zip_code'=>$zip_code, ':phone_number'=>$phone_number, ':date_of_birth'=>$date_of_birth, ':users_id' => $users_id));

if($statement->rowCount() == 1 ){
  $result = '<script> window.location.href = "adminViewUsers.php"</script>';
  $_SESSION['result'] = flashMessage('Changes successfully updated','pass');
    
    
  }else{
   
  $result = '<script> window.location.href = "myprofile.php"</script>';
  

  $_SESSION['result']= flashMessage('Nothing happened, you have not made any changes');
  }
}

?>