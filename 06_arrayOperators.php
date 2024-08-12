<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Operators Demonstration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h1>PHP Array Operators Demonstration</h1>

<?php
// Define two arrays
$array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
$array2 = array("c" => "cherry", "d" => "date", "e" => "elderberry");

// Array Union
$union = $array1 + $array2; // Union of $array1 and $array2
echo "<h2>Array Union</h2>";
echo "<pre>";
print_r($union);
echo "</pre>";

// Array Equality
$equality = ($array1 == $array2); // Checks if $array1 and $array2 are equal
echo "<h2>Array Equality</h2>";
echo "<pre>";
var_dump($equality);
echo "</pre>";

// Array Identity
$identity = ($array1 === $array2); // Checks if $array1 and $array2 are identical
echo "<h2>Array Identity</h2>";
echo "<pre>";
var_dump($identity);
echo "</pre>";

// Array Inequality
$inequality = ($array1 != $array2); // Checks if $array1 and $array2 are not equal
echo "<h2>Array Inequality</h2>";
echo "<pre>";
var_dump($inequality);
echo "</pre>";

// Array Non-Identity
$nonIdentity = ($array1 !== $array2); // Checks if $array1 and $array2 are not identical
echo "<h2>Array Non-Identity</h2>";
echo "<pre>";
var_dump($nonIdentity);
echo "</pre>";
?>

</body>
</html>
