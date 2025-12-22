<?php
session_start();

// Check if the user is logged in by verifying the session
if (!isset($_SESSION['email'])) {
    // If the user is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

    <h1>Welcome to Your Dashboard</h1>

    <p>Hello, <?php echo $_SESSION['email']; ?>! You are logged in.</p>

    <a href="logout.php">Logout</a> 

</body>
</html>
