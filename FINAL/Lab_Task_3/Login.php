<?php
session_start();

// If the user is already logged in, redirect to the dashboard page
if (isset($_SESSION['email'])) {
    header("Location: dashboard.php");  // Redirect to the dashboard
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];


    if ($email == "kiasali168@gmail.com" && $password == "123456") {
        $_SESSION['email'] = $email; 
        header("Location: dashboard.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>

    <form action="login.php" method="post">
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Enter your email" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Enter your password" required>
        </div>

        <div>
            <input class="button" type="submit" value="Login">
        </div>
    </form>

</body>
</html>
