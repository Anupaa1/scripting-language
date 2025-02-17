<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form method="post" action="">
        <label for="c">Enter Number of Chickens:</label>
        <input type="number" name="c" required><br><br>
        <label for="cow">Enter Number of cows:</label>
        <input type="number" name="cow"  required><br><br>
        <label for="pigs">Enter Number of Pigs:</label>
        <input type="number" name="pigs"  required><br><br>
        <button type="submit">Calculate </button>
    </form>
</body>
</html>
<?php
// Function to Calculate Total Number of Legs
function totalLegs($c, $cow, $pigs) {
    return ($c * 2) + ($cow * 4) + ($pigs * 4);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c = intval($_POST['c']);
    $cow = intval($_POST['cow']);
    $pigs = intval($_POST['pigs']);
    $legs = totalLegs($c, $cow, $pigs);
    echo "Chickens: $c<br>";
    echo "cows: $cow<br>";
    echo "Pigs: $pigs<br>";
    echo "Total Legs= $legs<br>";
}
?>