<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP array_key_exists() Function Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2, h3 {
            color: #333;
        }
        pre {
            background-color: #f8f8f8;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>PHP array_key_exists() Function</h2>

<?php

// Example 1: Basic Usage
$fruits = [
    "a" => "Apple",
    "b" => "Banana",
    "c" => "Cherry"
];
echo "<h3>Example 1: Basic Usage</h3>";
echo "<pre>";
if (array_key_exists("b", $fruits)) {
    echo "Key 'b' exists in the array with value: " . $fruits["b"];
} else {
    echo "Key 'b' does not exist in the array.";
}
echo "</pre>";

// Example 2: Checking for a Non-Existent Key
echo "<h3>Example 2: Checking for a Non-Existent Key</h3>";
echo "<pre>";
if (array_key_exists("d", $fruits)) {
    echo "Key 'd' exists in the array.";
} else {
    echo "Key 'd' does not exist in the array.";
}
echo "</pre>";

// Example 3: Using array_key_exists() with Numeric Indexes
$numbers = [10, 20, 30, 40, 50];
echo "<h3>Example 3: Using array_key_exists() with Numeric Indexes</h3>";
echo "<pre>";
if (array_key_exists(3, $numbers)) {
    echo "Key 3 exists in the array with value: " . $numbers[3];
} else {
    echo "Key 3 does not exist in the array.";
}
echo "</pre>";

// Example 4: Difference Between isset() and array_key_exists()
$items = [
    "a" => "Apple",
    "b" => null,
    "c" => "Cherry"
];
echo "<h3>Example 4: Difference Between isset() and array_key_exists()</h3>";
echo "<h4>Using isset():</h4>";
echo "<pre>";
if (isset($items["b"])) {
    echo "Key 'b' is set and not null.";
} else {
    echo "Key 'b' is either not set or is null.";
}
echo "</pre>";

echo "<h4>Using array_key_exists():</h4>";
echo "<pre>";
if (array_key_exists("b", $items)) {
    echo "Key 'b' exists in the array.";
} else {
    echo "Key 'b' does not exist in the array.";
}
echo "</pre>";

?>

</body>
</html>
