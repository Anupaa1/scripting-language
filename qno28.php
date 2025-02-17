<?php
session_start();
$id= "user";
$pass = "password";
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $rem = isset($_POST['rem']);


    if ($username === $id && $password === $pass) {

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;


        if ($rem) {
            setcookie('username', $username, time() + (86400 * 7), "/"); 
            echo " cookie also set<br>";
        }

        
        echo"login was successful";

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
        <?php if ($message): ?>
            <p class="message"><?= ($message) ?></p>
        <?php endif; ?>
        <form method="POST" action="">
        <label>Name:</label> 
            <input type="text" name="username"  required value="<?= isset($_COOKIE['username']) ? ($_COOKIE['username']) : '' ?>">
            <label>Password:</label>
            <input type="password" name="password" required>
            <label><input type="checkbox" name="rem"> Rember Me</label><br/><br/>
            <button type="submit">Login</button>
        </form>
</body>
</html>


