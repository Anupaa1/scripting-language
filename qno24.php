<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <h2>Enter a String</h2>
    <!-- HTML Form for input -->
    <form method="post" action="">
        <label for="inputString">Input String:</label>
        <input type="text" name="inputString" required>
        <input type="submit" value="Convert">
    </form>

    <?php
    // Function to convert last 3 characters to uppercase
    function convert($str) {
        $length = strlen($str);

        // If the length is less than 3, convert the whole string to uppercase
        if ($length < 3) {
            return strtoupper($str);
        }

        // Extract the part before the last 3 characters
        $start = substr($str, 0, $length - 3);
        // Convert the last 3 characters to uppercase
        $end = strtoupper(substr($str, -3));

        // Combine the parts
        return $start . $end;
    }

    // Process the form input
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST['inputString']; // Retrieve user input
        $outputString = convert($inputString); // Process the string

        // Display the result
        echo "<h3>Result:</h3>";
        echo "Input: " . ($inputString) . "</p>";
        echo "<p>Output: " .($outputString) . "</p>";
    }
    ?>
</body>
</html>