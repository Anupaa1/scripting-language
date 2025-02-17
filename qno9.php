<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form method="post" action="">
        <label for="w">Enter Number of Wins:</label>
        <input type="number" name="w" required><br><br>
        <label for="d">Enter Number of Draws:</label>
        <input type="number" name="d"  required><br><br>
        <label for="l">Enter Number of Loss:</label>
        <input type="number" name="l"  required><br><br>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>
<?php
// Function to Calculate Total Points
function calculatePoints($w, $d, $l) {
    return ($w * 3) + ($d * 1) + ($l * 0);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $w = intval($_POST['w']);
    $d = intval($_POST['d']);
    $l = intval($_POST['l']);
    $points = calculatePoints($w, $d, $l);
    echo "Wins: $w<br>";
    echo "Draws: $d<br>";
    echo "Loss: $l<br>";
    echo "Total Points= $points<br>";
}
?>
