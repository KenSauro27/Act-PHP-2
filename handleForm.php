<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have some validation of the login credentials
    $firstName = $_POST['firstName'];
    $password = $_POST['password'];

    // Set the session variables with user data
    $_SESSION['firstName'] = $firstName;
    $_SESSION['password'] = $password;

    // Redirect back to the login page to display the logged-in user
    header("Location: index.php");
    exit();
}
