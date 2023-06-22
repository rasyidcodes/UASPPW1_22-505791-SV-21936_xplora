<?php


session_start();

            $user_id = '';
            // Access the user_id value from the session
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
                
                // Use the $user_id as needed
                // ...
            } else {
                // Redirect to the signup route
                header('Location: /xplora/signup');
                exit(); // Terminate the current script to prevent further execution
            }


// Establish database connection (replace with your own details)
require 'connection.php';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$postContent = $_POST['postContent'];



// Prepare and execute SQL statement to insert data
$sql = "INSERT INTO posts (status, postBy) VALUES ('$postContent', '$user_id')";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
