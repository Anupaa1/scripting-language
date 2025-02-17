

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post" action="">
        <label for="a"> First Number:</label>
        <input type="number"  name="a"  required><br><br>
        <label for="b"> Second Number:</label>
        <input type="number"  name="b"  required><br><br>
        <CENTER><button type="submit"> Sum</button></CENTER>
    </form>
</body>
</html>
<?php

// Function to Return the Sum of Two Numbers
function sum($a, $b) {
    return $a + $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = floatval($_POST['a']);
    $b = floatval($_POST['b']);
    $result = sum($a, $b);
   
    echo "FIRST NUMBER: $a<br>";
    echo "SECOND NUMBER: $b<br>";
    echo "Sum of two number is : $result<br>";
}
?>