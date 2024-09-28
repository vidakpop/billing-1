<?php
// update_balance.php

// Include necessary files and initialize
// Include your ORM or database connection logic here
// For demonstration purposes, let's assume you're using a simple database connection

// Connect to the database (replace with your actual database connection code)
$db_host = 'localhost';
$db_name = 'byte';
$db_user = 'root';
$db_pass = 'password';

$response = array(); // Initialize response array

try {
    $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Get the paid amount from the POST request
    $amount = isset($_POST['amount']) ? $_POST['amount'] : 0;

    // Update the balance in the database
    $stmt = $db->prepare("UPDATE balance SET sms_balance = sms_balance + :amount");
    $stmt->bindParam(':amount', $amount, PDO::PARAM_INT);
    $stmt->execute();

    // Check if the update was successful
    $rowCount = $stmt->rowCount();
    if ($rowCount > 0) {
        // Success message
        $response['status'] = 'success';
        $response['message'] = "Balance updated successfully. Paid amount: {$amount}";
    } else {
        // Error message if no rows were affected
        $response['status'] = 'error';
        $response['message'] = "Failed to update balance.";
    }
} catch (PDOException $e) {
    // Display any database errors
    $response['status'] = 'error';
    $response['message'] = "Error: " . $e->getMessage();
}

// Close the database connection
$db = null;

// Return JSON response
echo json_encode($response);
?>