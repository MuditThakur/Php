<?php
// File: spaceship_operator_demo.php

// Integer comparison
echo "Comparing Integers:\n";
echo "<pre>";
echo "3 <=> 4: " . (3 <=> 4) . "\n"; // Outputs: -1
echo "<pre>";
echo "4 <=> 4: " . (4 <=> 4) . "\n"; // Outputs: 0
echo "<pre>";
echo "5 <=> 4: " . (5 <=> 4) . "\n"; // Outputs: 1

echo "\n";

// String comparison
echo "Comparing Strings:\n";
echo "'apple' <=> 'banana': " . ("apple" <=> "banana") . "\n"; // Outputs: -1
echo "<pre>";
echo "'apple' <=> 'apple': " . ("apple" <=> "apple") . "\n";   // Outputs: 0
echo "<pre>";
echo "'banana' <=> 'apple': " . ("banana" <=> "apple") . "\n"; // Outputs: 1

echo "\n";

// Array comparison
echo "Comparing Arrays:\n";
echo "[1, 2, 3] <=> [1, 2, 4]: " . ([1, 2, 3] <=> [1, 2, 4]) . "\n"; // Outputs: -1
echo "<pre>";
echo "[1, 2, 3] <=> [1, 2, 3]: " . ([1, 2, 3] <=> [1, 2, 3]) . "\n"; // Outputs: 0
echo "<pre>";
echo "[1, 3, 3] <=> [1, 2, 3]: " . ([1, 3, 3] <=> [1, 2, 3]) . "\n"; // Outputs: 1
?>
