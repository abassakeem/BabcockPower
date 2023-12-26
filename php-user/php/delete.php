<?php 
include 'database.php';
include 'utility.php';


try{
    $sql = $db->query("SELECT id, meterid FROM userstable WHERE created_at <= CURRENT_DATE - INTERVAL 3 DAY AND activated = '0'");

    while($rs = $sql->fetch()){

        $user_id = $rs['id'];
        $meter_id = $rs['meterid'];
        
        //check if account was deactivated and not that it was never activated
        if(!checkDuplicateInput('trash','user_idd', $user_id,$db)){
            $user_pic ="../abass svg for project/".$meter_id.".jpg";
            if (file_exists($user_pic)){
                unlink($user_pic);
            }
            $result =$db->exec("DELETE FROM userstable WHERE id =$user_id AND activated = '0' LIMIT 1");
            echo "$result Account deleted";
        }


        
    }

}catch(PDOExcepton $ex){
   
}


?>