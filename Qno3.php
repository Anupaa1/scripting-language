
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post" action="">
        <label for="m">Enter Minutes:</label>
        <input type="number" name="m"  required>
        <button type="submit">Convert</button>
    </form>
</body>
</html>
<?php

// Function to Convert Minutes to Seconds
function minToSec($m) {
    return $m * 60;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $m = intval($_POST['m']);
    $sec = minToSec($m);
    echo "<h3>Minutes to Seconds</h3>";
    echo "<h3>Minutes: $m</h3><br>";
    echo "<h3>Seconds: $sec</h3><br>";
}
?>
