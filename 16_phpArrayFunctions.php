<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions Demo</title>
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
            background-color: #e7e7e7;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>PHP Array Functions Demo</h2>

<?php
// 1. Creating an array
$fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];

// 2. array_push: Adding elements to the end of the array
array_push($fruits, "Fig", "Grape");
echo "<h3>After array_push:</h3>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

// 3. array_pop: Removing the last element from the array
$lastFruit = array_pop($fruits);
echo "<h3>After array_pop (removed $lastFruit):</h3>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

// 4. array_shift: Removing the first element from the array
$firstFruit = array_shift($fruits);
echo "<h3>After array_shift (removed $firstFruit):</h3>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

// 5. array_unshift: Adding elements to the beginning of the array
array_unshift($fruits, "Apricot", "Blueberry");
echo "<h3>After array_unshift:</h3>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

// 6. array_merge: Merging two arrays
$berries = ["Strawberry", "Blueberry", "Raspberry"];
$mergedArray = array_merge($fruits, $berries);
echo "<h3>After array_merge:</h3>";
echo "<pre>";
print_r($mergedArray);
echo "</pre>";

// 7. array_slice: Extracting a portion of the array
$slicedArray = array_slice($fruits, 2, 3);
echo "<h3>After array_slice:</h3>";
echo "<pre>";
print_r($slicedArray);
echo "</pre>";

// 8. array_splice: Removing a portion of the array and replacing it
array_splice($fruits, 1, 2, ["Kiwi", "Lemon"]);
echo "<h3>After array_splice:</h3>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

// 9. array_reverse: Reversing the array
$reversedArray = array_reverse($fruits);
echo "<h3>After array_reverse:</h3>";
echo "<pre>";
print_r($reversedArray);
echo "</pre>";

// 10. in_array: Checking if an element exists in the array
$isInArray = in_array("Cherry", $fruits);
echo "<h3>Is 'Cherry' in the fruits array?</h3>";
echo "<p>" . ($isInArray ? "Yes" : "No") . "</p>";

// 11. array_search: Searching for an element's index in the array
$index = array_search("Lemon", $fruits);
echo "<h3>Index of 'Lemon' in the fruits array:</h3>";
echo "<p>" . ($index !== false ? $index : "Not found") . "</p>";

// 12. array_unique: Removing duplicate values from an array
$numbers = [1, 2, 2, 3, 4, 4, 5];
$uniqueNumbers = array_unique($numbers);
echo "<h3>After array_unique:</h3>";
echo "<pre>";
print_r($uniqueNumbers);
echo "</pre>";

// 13. array_map: Applying a function to each element in the array
$upperFruits = array_map('strtoupper', $fruits);
echo "<h3>After array_map (strtoupper):</h3>";
echo "<pre>";
print_r($upperFruits);
echo "</pre>";

// 14. array_filter: Filtering elements in an array using a callback function
$longNamedFruits = array_filter($fruits, function($fruit) {
    return strlen($fruit) > 5;
});
echo "<h3>After array_filter (fruits with names longer than 5 characters):</h3>";
echo "<pre>";
print_r($longNamedFruits);
echo "</pre>";

// 15. array_reduce: Reducing the array to a single value
$concatenatedFruits = array_reduce($fruits, function($carry, $fruit) {
    return $carry . $fruit . ", ";
});
echo "<h3>After array_reduce (concatenation):</h3>";
echo "<p>" . rtrim($concatenatedFruits, ", ") . "</p>";

?>

</body>
</html>
