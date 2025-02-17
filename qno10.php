<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <form method="post" action="">
        <label for="str1"> First String:</label>
        <input type="text" name="str1"  required><br><br>
        <label for="str2">Second String:</label>
        <input type="text" name="str2"  required><br><br>
        <button type="submit">Compare</button>
    </form>
</body>
</html>

<?php

// Function to Compare String Lengths
function strcompare($str1, $str2) {
    return strlen($str1) === strlen($str2);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str1 = $_POST['str1'];
    $str2 = $_POST['str2'];
    $result = strcompare($str1, $str2) ? "True" : "False";
    echo "First String: $str1<br>";
    echo "Second String : $str2<br>";
    echo "Are lengths equal? <br>
    $result<br>";
}
?>
