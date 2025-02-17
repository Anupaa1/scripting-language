<?php
// Function to calculate area bd on the shape
function calArea($b, $h, $s) {
    // Ensure b and height are numeric values
    if (!is_numeric($b) || !is_numeric($h)) {
        return "base and Height must be numeric values.";
    }

    // Check for valid shape and calculate area
    if ($s == "t") {
        return 0.5 * $b * $h;  // Area of triangle: (base* height) / 2
    } elseif ($s == "p") {
        return $b * $h;  // Area of parallelogram: base* height
    } else {
        return "Invalid shape. Please enter either 't' or 'p'.";
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $b = $_POST['b'];  // Get base value
    $h = $_POST['h'];  // Get height value
    $s = strtolower(trim($_POST['s']));  // Get shape value and normalize it

    // Call the function to calculate area
    $area = calArea($b, $h, $s);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h2>Calculate the Area of a Shape</h2>
    <!-- Form to input b, height, and shape -->
    <form method="POST" action="">
        <label for="b">Enter the base (decimal):</label>
        <input type="number" name="b" required><br><br>

        <label for="h">Enter the height (decimal):</label>
        <input type="number"  name="h" required><br><br>

        <label for="s">Enter the shape ("t" or "p"):</label>
        <input type="text"  name="s" required><br><br>

        <button type="submit">Calculate</button>
    </form>
    <?php
    // Display result if form is submitted
    if (isset($area)) {
        echo "<p>The area of the $s is: $area</p>";
    }
    ?>

</body>
</html>
