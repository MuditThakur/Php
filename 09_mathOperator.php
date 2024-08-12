<?php
// 1. Basic Arithmetic Operations
$a = 10;
$b = 3;

echo "Addition: " . ($a + $b) . "\n";          // 10 + 3 = 13
echo "<pre>";
echo "Subtraction: " . ($a - $b) . "\n";  
echo "<pre>";     // 10 - 3 = 7
echo "Multiplication: " . ($a * $b) . "\n";    // 10 * 3 = 30
echo "<pre>";
echo "Division: " . ($a / $b) . "\n";          // 10 / 3 = 3.3333
echo "<pre>";
echo "Modulus: " . ($a % $b) . "\n";           // 10 % 3 = 1
echo "<pre>";

// 2. Power and Square Root
echo "Power: " . pow($a, $b) . "\n";           // 10^3 = 1000
echo "<pre>";
echo "Square Root: " . sqrt(16) . "\n";        // sqrt(16) = 4

// 3. Trigonometric Functions
$angle = 45; // Angle in degrees
echo "<pre>";
$rad = deg2rad($angle); // Convert degrees to radians

echo "Sine: " . sin($rad) . "\n";              // sin(45°) = 0.7071
echo "<pre>";
echo "Cosine: " . cos($rad) . "\n";            // cos(45°) = 0.7071
echo "<pre>";
echo "Tangent: " . tan($rad) . "\n";           // tan(45°) = 1

// 4. Logarithmic Functions
echo "Natural Logarithm: " . log(10) . "\n";   // log_e(10) ≈ 2.3026
echo "<pre>";
echo "Base-10 Logarithm: " . log10(10) . "\n"; // log_10(10) = 1

// 5. Rounding Functions
echo "Round: " . round(3.567) . "\n";          // 4
echo "<pre>";
echo "Ceil: " . ceil(3.567) . "\n";            // 4
echo "<pre>";
echo "Floor: " . floor(3.567) . "\n";          // 3

// 6. Absolute Value
echo "Absolute Value: " . abs(-5) . "\n";      // |-5| = 5

// 7. Random Numbers
echo "Random Number: " . rand(1, 100) . "\n";  // Random number between 1 and 100

// 8. Maximum and Minimum
echo "Max Value: " . max(2, 3, 9, 1) . "\n";   // 9
echo "<pre>";
echo "Min Value: " . min(2, 3, 9, 1) . "\n";// 1

?>