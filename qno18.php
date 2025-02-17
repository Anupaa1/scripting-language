<?php
// Function to compute the absolute difference and return triple if n is greater than 51
function comdiff($num) {
    $difference = abs($num - 51);  // Calculate absolute difference
    
    // If n is greater than 51, return triple the absolute difference
    if ($num > 51) {
        return 3 * $difference;
    } else {
        return $difference;
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the value of n from the form
    $num = $_POST['num'];
    
    // Call the function to compute the absolute difference
    $result = comdiff($num);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    
    <!-- Form to input n -->
    <form method="POST" action="">
        <label for="num">Enter a number:</label>
        <input type="number"  name="num" required><br><br>
        <button type="submit">Calculate </button>
    </form>

    <?php
    // Display the result if the form is submitted
    if (isset($result)) {
        echo "<p>The result is: $result</p>";
    }
    ?>

</body>
</html>
