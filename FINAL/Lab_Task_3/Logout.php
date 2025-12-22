<?php
session_start();
session_destroy();  // Destroy the session, logging the user out

// Redirect to the login page after logout
header("Location: login.php");
exit();
?>
