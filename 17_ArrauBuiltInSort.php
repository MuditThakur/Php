<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Sorting Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h2 {
            color: #333;
        }
        pre {
            background-color: #f8f8f8;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h3 {
            color: #444;
        }
    </style>
</head>
<body>

<h2>PHP Array Sorting Functions</h2>

<?php

// sort() - Sorts an array in ascending order
$numbers = [4, 2, 8, 6];
sort($numbers);
echo "<h3>sort()</h3>";
echo "<pre>";
print_r($numbers);
echo "</pre>";

// rsort() - Sorts an array in descending order
$numbers = [4, 2, 8, 6];
rsort($numbers);
echo "<h3>rsort()</h3>";
echo "<pre>";
print_r($numbers);
echo "</pre>";

// asort() - Sorts an array and maintains index association
$numbers = [4, 2, 8, 6];
asort($numbers);
echo "<h3>asort()</h3>";
echo "<pre>";
print_r($numbers);
echo "</pre>";

$numbers = [4, 2, 8, 6];
arsort($numbers);
echo "<h3>arsort()</h3>";
echo "<pre>";
print_r($numbers);
echo "</pre>";

$numbers = [4, 2, 8, 6];
ksort($numbers);
echo "<h3>Ksort()</h3>";
echo "<pre>";
print_r($numbers);
echo "</pre>";

$numbers = [4, 2, 8, 6];
krsort($numbers);
echo "<h3>Krsort()</h3>";
echo "<pre>";
print_r($numbers);
echo "</pre>";

?>

</body>
</html>