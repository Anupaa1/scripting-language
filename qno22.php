<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
    <!-- HTML form to take user input -->
    <form method="post" action="">
        <label for="inputString">Input String:</label>
        <input type="text" name="inputString" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Function to manipulate the string
    function strfunc($str) {
        // Check the length of the string
        $firthree = strlen($str) < 3 ? $str : substr($str, 0, 3);
        // Add the extracted characters to the front and back
        return $firthree . $str . $firthree;
    }

    // Process the form when submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input
        $inputString = $_POST['inputString'];

        // Call the function
        $outputString = strfunc($inputString);

        // Display results
        echo "<h3>Result:</h3>";
        echo "<p>Input: " . htmlspecialchars($inputString) . "</p>";
        echo "<p>Output: " . htmlspecialchars($outputString) . "</p>";
    }
    ?>
</body>
</html>
