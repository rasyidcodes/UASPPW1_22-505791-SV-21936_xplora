<?php
session_start();

// Clear all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect the user to the login page or any other desired location
header('Location: /xplora/signin');
exit();
?>