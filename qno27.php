<?php
session_start();
$valid_username = "admin";
$valid_password = "12345";
$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';  
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        echo"LOGIN SUCCESSFUL welcome to dashboard";
        exit;
    } else {
        $message = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
</head>
<body>

        <h2>Login</h2>
        <form method="POST" action="">
            <input type="text" name="username"  required>
            <input type="password" name="password"  required>
            <button type="submit">Login</button>
        </form>
</body>
</html>


