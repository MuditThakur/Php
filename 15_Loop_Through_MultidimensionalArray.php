<?php
// Define a 2D array
$multiArray = [
    ["Apple", "Banana", "Cherry"],
    ["Dog", "Elephant", "Frog"],
    ["Grapes", "Honey", "Ice"]
];

// Loop through the outer array
foreach ($multiArray as $subArray) {
    // Loop through each inner array
    foreach ($subArray as $item) {
        // Print each item
        echo $item . " ";
    }
    // Print a newline after each sub-array
    echo "\n";
}
?>
