<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h2>Interest Calculator</h2>
    <form method="post">
        <label for="P">P Amount (P):</label>
        <input type="number" name="P"  required><br><br>

        <label for="R">Rate of Interest (R):</label>
        <input type="number" name="R" id="R" required><br><br>

        <label for="T">Time Period (T) in years:</label>
        <input type="number" name="T" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $P = $_POST["P"];
        $R = $_POST["R"];
        $T = $_POST["T"];

        // Simple Interest formula: SI = (P * R * T) / 100
        $simpleInterest = ($P * $R * $T) / 100;

        echo "<h3>Calculated Simple Interest: " . number_format($simpleInterest, 2) . "</h3>";
    }
    ?>
</body>
</html>
