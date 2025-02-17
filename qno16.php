<?php
// Function to calculate the number of cars needed
function calcar($popl) {
    // A car can hold 5 popl (4 passengers and 1 driver)
    $car_capacity = 5;
    
    // Calculate the number of cars needed by dividing the total number of popl by the car capacity
    // and rounding up to ensure all popl are accommodated.
    $cars_needed = ceil($popl / $car_capacity);
    
    return $cars_needed;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the number of popl from the form
    $popl = $_POST['popl'];
    
    // Call the function to calculate the number of cars needed
    $cars_needed = calcar($popl);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    
    <!-- Form to input number of people -->
    <form method="POST" action="">
        <label for="popl">Enter  number of people:</label>
        <input type="number" name="popl" required><br><br>

        <button type="submit">Calculate</button>
    </form>

    <?php
    // Display the result if the form is submitted
    if (isset($cars_needed)) {
        echo "<p>You will need $cars_needed car(s) to seat $popl people</p>";
    }
    ?>

</body>
</html>
