

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form method="post" action="">
        <label for="b">Enter Base:</label>
        <input type="number"  name="b"  required><br><br>
        <label for="h">Enter hight:</label>
        <input type="number"  name="h"  required><br><br>
        <button type="submit"> Area</button>
    </form>
</body>
</html>
<?php

// Function to Calculate the Area of a Triangle
function trangArea($b, $h) {
    return 0.5 * $b * $h;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $b = floatval($_POST['b']);
    $h = floatval($_POST['h']);
    $A = trangArea($b, $h);
    echo "Base: $b<br>";
    echo " Hight: $h<br>";
    echo "Area of  triangle is: $A<br>";
}
?>
