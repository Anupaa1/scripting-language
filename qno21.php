<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <!-- Form for user input -->
    <form method="post" action="">
        <label for="inputString">Input String:</label>
        <input type="text" id="inputString" name="inputString" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Function to manipulate the string
    function addLastCharFrontAndBack($str) {
        if (strlen($str) >= 1) {
            $lastChar = substr($str, -1); // Get the last character
            return $lastChar . $str . $lastChar; // Add last character at front and back
        }
        return "String must have at least one character.";
    }

    // Process the form input after submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST['inputString']; // Retrieve user input
        $outputString = addLastCharFrontAndBack($inputString); // Call function

        // Display the result
        echo "<h3>Result:</h3>";
        echo "<p>Input: " . htmlspecialchars($inputString) . "</p>";
        echo "<p>Output: " . htmlspecialchars($outputString) . "</p>";
    }
    ?>
</body>
</html>
