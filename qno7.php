<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form method="post" action="">
        <label for="vol">Enter voltage (V):</label>
        <input type="number"  name="vol"  required><br><br>
        <label for="cur">Enter current (A):</label>
        <input type="number" name="cur" required><br><br>
        <button type="submit">Calculate </button>
    </form>
</body>
</html>
<?php

// Function to Calculate Electrical Power
function calculatePower($vol, $cur) {
    return $vol * $cur;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vol = floatval($_POST['vol']);
    $cur = floatval($_POST['cur']);
    $power = calculatePower($vol, $cur);
    echo "voltage: $vol <br>";
    echo "current: $cur <br>";
    echo " The total Power is : $power W<br>";
}
?>
