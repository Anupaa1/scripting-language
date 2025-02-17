<?php
function strlegth($str) {
    if ($str === "") {
        return 0;
    } else {
        return 1 + strlegth(substr($str, 1));
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST['string']; // Get the input string from the form

    $length = strlegth($string); // Call the recursive function to get string length
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <!-- Form to input string -->
    <form method="POST" action="">
        <label for="string">Enter any string:</label>
        <input type="text" name="string" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    // Display result if the form is submitted
    if (isset($length)) {
        echo "<p> You enter : $string </p>";
        echo "<p>The length of the string is: $length</p>";
    }
    ?>

</body>
</html>
