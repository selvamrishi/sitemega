<?php
// Initialize the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    session_destroy();
    header("location: auth-login.php");
    // exit;
}
else{
    header("location: auth-login.php");
}
?>
