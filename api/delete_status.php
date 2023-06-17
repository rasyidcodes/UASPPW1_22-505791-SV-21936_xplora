<?php
// Retrieve the data sent from JavaScript
$postID = $_POST['param1'];

// Perform the update operation with the received data
// Replace this code with your actual update logic

// Example: Updating a database record
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'xplora';

// Create a new database connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check for connection errors
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Prepare the update query
$sql = "DELETE FROM posts WHERE postID = '$postID'"; // Replace with your actual table and column names

// Execute the update query
if ($conn->query($sql) === TRUE) {
    echo 'Data deleted successfully';
} else {
    echo 'Error deleting data: ' . $conn->error;
}

// Close the database connection
$conn->close();
?>
