<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
<form method="POST">
        <label  for="inp_str">Enter String</label>
        <input type="text" name="inp_str"/>
    <input type="submit" value="Generate">
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['inp_str']) && !empty(trim($_POST['inp_str']))) {
        $inp_str = $_POST['inp_str'];
        $first_two_chars = substr($inp_str, 0, 2); // Extract the first 2 characters

        if (strlen($inp_str) < 2) {
            echo $inp_str; // If the string is shorter than 2 characters, return the original string
        } else {
            // Concatenate 4 copies of the first 2 characters
            $result = str_repeat($first_two_chars . " ", 4);
            echo rtrim($result); // Remove any trailing space
        }
    }
}
?>
