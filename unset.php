<?php
session_start();
session_unset(); // Unset session variables
session_destroy(); // Destroy the session

// Redirect back to the login page
header("Location: index.php");
exit();
?>
