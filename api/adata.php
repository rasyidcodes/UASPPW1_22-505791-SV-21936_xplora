<?php
// Establish database connection (replace with your own details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xplora";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$postContent = $_POST['postContent'];
$user_id = $_POST['user_id'];


// Prepare and execute SQL statement to insert data
$sql = "INSERT INTO posts (status, postBy) VALUES ('$postContent', '$user_id')";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
