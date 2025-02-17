<?php

$integer = 48; // Integer
$float = 3.14159; // Float
$string = "Anupa kadel"; // String
$boolean = true; // Boolean
$array = ["Cow", "Dog", "Horse"]; // Array

// Displaying values using echo
echo "Integer: $integer<br>";
echo "Float: $float<br>";
echo "String: $string<br>";
echo "Boolean: " . ($boolean ? "true" : "false") . "<br>";
echo "<br>";

// Using print to display values
print "Using print:<br>";
print "Integer: $integer<br>";
print "Float: $float<br>";
print "String: $string<br>";
print "Boolean: " . ($boolean ? "true" : "false") . "<br>";
echo "<br>";

// Display content of the array using print_r and var_dump
print "Array content using print_r:<br>";
print_r($array);
echo "<br>";

print "Array content using var_dump:<br>";
var_dump($array);
echo "<br>";

// Data type checks
echo "Data type checks:<br>";
echo "\$integer is " . (is_int($integer) ? "an integer" : "not an integer") . "<br>";
echo "\$float is " . (is_float($float) ? "a float" : "not a float") . "<br>";
echo "\$string is " . (is_string($string) ? "a string" : "not a string") . "<br>";
echo "\$boolean is " . (is_bool($boolean) ? "a boolean" : "not a boolean") . "<br>";

?>
