<?php
// Start the session
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedin'])) {
    // Redirect to the login page
    header("Location: login.php");
    exit;
}
?>