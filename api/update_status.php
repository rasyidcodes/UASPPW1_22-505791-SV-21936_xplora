<?php
// Retrieve the data sent from JavaScript
$status = $_POST['param1'];
$postID = $_POST['param2'];

// Perform the update operation with the received data
// Replace this code with your actual update logic

// Example: Updating a database record
// $dbHost = 'localhost';
// $dbUser = 'root';
// $dbPass = '';
// $dbName = 'xplora';

// // Create a new database connection
// $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

require 'connection.php';

            
// Check for connection errors
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Prepare the update query
$sql = "UPDATE posts SET status = '$status'  WHERE postID = '$postID'"; // Replace with your actual table and column names

// Execute the update query
if ($conn->query($sql) === TRUE) {
    echo 'Data updated successfully';
} else {
    echo 'Error updating data: ' . $conn->error;
}

// Close the database connection
$conn->close();
?>
