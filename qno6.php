<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <form method="post" action="">
        <label for="yrs">Enter Age in Years:</label>
        <input type="number" name="yrs"  required><br><br>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>
<?php

// Function to Convert Age in Years to Days
function ageInDays($yrs) {
    return $yrs * 365;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yrs = intval($_POST['yrs']);
    $days = ageInDays($yrs);
    echo "Age in Years: $yrs<br>";
    echo "Your Age in Days= $days<br>";
}
?>
