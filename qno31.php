<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $dob = trim($_POST['dob']);
    $phone = trim($_POST['phone']);

    $errors = [];

    // Validate Username
    if (strlen($username) < 8) {
        $errors[] = "Username must be 8 characters.";
    }

    // Validate Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    // Validate Date of Birth
    $dobDate = DateTime::createFromFormat('Y-m-d', $dob);
    if (!$dobDate || $dobDate->format('Y-m-d') !== $dob) {
        $errors[] = "Invalid date of birth use YYYY-MM-DD.";
    }

    // Validate Phone
    if (!preg_match('/^\d{8,10}$/', $phone)) {
        $errors[] = "Phone number must be 8-10 digits.";
    }

    if (empty($errors)) {
        // Simulate storing user data (replace with actual DB logic)
        echo "Registration successful!";
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
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
<form action="" method="post">
    <label for="username">Username :</label><br>
    <input type="text" name="username"  required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email"  required><br><br>

    <label for="dob">Date of Birth </label><br>
    <input type="date" name="dob" required><br><br>

    <label for="phone">Phone :</label><br>
    <input type="number" name="phone" required><br><br>

    <input type="submit" value="Register">
</form>
</body>
</html>
