<?php
include 'db.php';

$sucess="";
$error="";  
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    if(empty($username) || empty($password) || empty($email)) {
        $error="All fields are required.";
    }

    else{
        $hashed_password=password_hash($password,PASSWORD_DEFAULT);
    

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";
    if($conn->query($sql)){
        $sucess="Registration successful!. Now you can login.";
    }
    else {
        $error="Error: " . $conn->error;
    }

    }
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        
    .success{
        color: green;
    } 

    .error{
        color: red;
    }
    </style>

</head>

<body>

<h2>Registration Form</h2>
<form method="post" action="">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    Email: <input type="email" name="email"><br><br>
    <input type="submit" value="Register">




</form>

</body>

</html>