<?php 
include "includes/adminDatabase.php";

include 'includes/adminUtility.php';

$users_id = $_GET['users_id'];
$deactivateQuery = $db->prepare("DELETE FROM userstable  WHERE users_id = :users_id");
            $deactivateQuery->execute(array(':users_id' => $users_id));

    if($deactivateQuery->rowCount() === 1){
        redirectTo'adminEditUser.php';
        $_SESSION['result'] = toastMessage('Account successfully Deleted');
    }else{
        toastMessage("Record failed to  delete");
    }
?>