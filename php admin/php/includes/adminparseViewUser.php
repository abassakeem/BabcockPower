<?php

if(isset($_SESSION['username'])) {

    $statement = $db->prepare("SELECT * FROM userstable WHERE roles = 'user'  ORDER BY created_at DESC");
    $statement->execute();

    // Fetch the users
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Calculate the total number of users
    $totalUsers = count($users);

    

    // Rest of your code to display or process users as needed
    foreach ($users as $user) {
        // Process each user as needed
    }

}
?>
