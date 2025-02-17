<?php
// Function to add "if" to the front of a string if it doesn't already start with "if"
function addIfPrefix($str) {
    // Check if the string starts with "if"
    if (substr($str, 0, 2) === "if") {
        return $str;  // Return the string unchanged if it starts with "if"
    } else {
        return "if " . $str;  // Add "if" at the beginning of the string
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the string from the form
    $inputString = $_POST['inputString'];
    
    // Call the function to add "if" to the front of the string
    $result = addIfPrefix($inputString);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    
    <!-- Form to input a string -->
    <form method="POST" action="">
        <label for="inputString">Enter a string:</label>
        <input type="text"  name="inputString" required><br><br>

        <button type="submit">process</button>
    </form>

    <?php
    // Display the result if the form is submitted
    if (isset($result)) {
        echo "<p>Modified string: $result</p>";
    }
    ?>

</body>
</html>
