<?php
// Function to get the value at a given index in the array
function getValueAtIndex($array, $index) {
    // Check if the index is valid in the array
    if (isset($array[$index])) {
        return $array[$index];
    } else {
        return "Index out of bounds.";
    }
}
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the index and array from the form
    $index = $_POST['index']; // Get the index
    $array = explode(",", $_POST['array']); // Convert the input string to an array

    // Call the function to get the value at the given index
    $value = getValueAtIndex($array, $index);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>  
    <!-- Form to input array and index -->
    <form method="POST" action="">
        <label for="array">Enter the array (comma separated values):</label>
        <input type="text" name="array" required><br><br>

        <label for="index">Enter the index:</label>
        <input type="number" name="index" required><br><br>

        <button type="submit">Get Value</button>
    </form>
    <?php
    // Display the result if the form is submitted
    if (isset($value)) {
        echo "<p>Value at index $index: $value</p>";
    }
    ?>
</body>
</html>
