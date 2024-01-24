<?php

if (isset($_SESSION['username'])) {
    $statement = $db->prepare("SELECT SUM(amount) AS totalAmount FROM customer_details");
    $statement->execute();

    // Fetch the total amount
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $totalAmount = $result['totalAmount'];
} else {
    // Redirect to login page or handle unauthorized access
    header("Location: signin.php");
    exit();
}
?>
