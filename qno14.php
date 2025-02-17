<?php
function findStringIndex($array, $string) {
    $index = array_search($string, $array);
    
    if ($index !== false) {
        return $index;
    } else {
        return "String not found in the array.";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST['string']; 
    $array = explode(",", $_POST['array']); 
    $index = findStringIndex($array, $string);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form method="POST" action="">
        <label for="array">Enter the array (comma separated values):</label>
        <input type="text"  name="array" required><br><br>
        <label for="string">Enter the string to search for:</label>
        <input type="text"  name="string" required><br><br>
        <button type="submit">Find</button>
    </form>
    <?php
    if (isset($index)) {
        echo "<p>Index of the string '$string': $index</p>";
    }
    ?>
</body>
</html>