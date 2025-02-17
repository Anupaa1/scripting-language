<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    
    <!-- Form to input number -->
    <form method="POST" action="">
        <label for="number">Enter any number:</label>
        <input type="number"  name="number" required>
        <button type="submit">Check</button>
    </form>
</body>
</html>
<?php
// Function to check divisibility by 5
function Div($number) {
    return $number % 5 === 0;
}
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number']; // Get the input number from the form

    if (Div($number)) {
        $result = "$number is divisible by 5.";
    } else {
        $result = "$number is not divisible by 5.";
    }
    if (isset($result)) {
        echo "<p>$result</p>";
    }
}
?>
