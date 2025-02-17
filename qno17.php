<?php
// Function to compute the sum or triple the sum if the values are the same
function computeSum($a, $b) {
    // Check if the two values are the same
    if ($a == $b) {
        return 3 * ($a + $b); // Triple the sum if they are the same
    } else {
        return $a + $b; // Return the sum if they are different
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the integer values from the form
    $a = $_POST['a'];
    $b = $_POST['b'];

    // Call the function to compute the sum or triple sum
    $result = computeSum($a, $b);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    
    <!-- Form to input two integer values -->
    <form method="POST" action="">
        <label for="a"> first integer:</label>
        <input type="number"  name="a" required><br><br>

        <label for="b"> second integer:</label>
        <input type="number" name="b" required><br><br>

        <button type="submit">CALCULATE</button>
    </form>

    <?php
    // Display the result if the form is submitted
    if (isset($result)) {
        echo "<p>The result is: $result</p>";
    }
    ?>

</body>
</html>
