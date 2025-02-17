<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <!-- HTML Form for input -->
    <form method="post" action="">
        <label for="num1">Enter first number:</label>
        <input type="number" name="num1" required><br><br>

        <label for="num2">Enter second number:</label>
        <input type="number"  name="num2" required><br><br>

        <label for="num3">Enter third number:</label>
        <input type="number" name="num3" required><br><br>

        <input type="submit" value=" Largest">
    </form>

    <?php
    // Function to find the largest number among three integers
    function findLargest($a, $b, $c) {
        if ($a >= $b && $a >= $c) {
            return $a;
        } elseif ($b >= $a && $b >= $c) {
            return $b;
        } else {
            return $c;
        }
    }

    // Process form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        // Find the largest number
        $largest = findLargest($num1, $num2, $num3);

        // Display the result
        echo "<h3>Result:</h3>";
        echo "<p>The largest number among <strong>$num1</strong>, <strong>$num2</strong>, and <strong>$num3</strong> is: <strong>$largest</strong></p>";
    }
    ?>
</body>
</html>
