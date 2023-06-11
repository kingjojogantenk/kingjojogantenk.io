<?php
include('session.php');
// Start the session
session_start();

// Unset session variables
unset($_SESSION['loggedin']);
unset($_SESSION['username']);

// Destroy the session
session_destroy();

// Redirect to login page or any other desired page
header('Location: login.php');
exit();

?>