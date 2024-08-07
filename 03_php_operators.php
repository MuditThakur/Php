<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Operators Demo</title>
</head>
<body>
    <h1>PHP Operators Demonstration</h1>

    <h2>Arithmetic Operators</h2>
    <?php
    $a = 10;
    $b = 3;

    echo "$a + $b = " . ($a + $b) . "<br>"; // Addition
    echo "$a - $b = " . ($a - $b) . "<br>"; // Subtraction
    echo "$a * $b = " . ($a * $b) . "<br>"; // Multiplication
    echo "$a / $b = " . ($a / $b) . "<br>"; // Division
    echo "$a % $b = " . ($a % $b) . "<br>"; // Modulus
    ?>

    <h2>Assignment Operators</h2>
    <?php
    $c = $a; 
    echo "\$c = $a; => c = $c<br>";

    $c += $b; 
    echo "\$c += $b; => c = $c<br>";

    $c -= $b; 
    echo "\$c -= $b; => c = $c<br>";

    $c *= $b; 
    echo "\$c *= $b; => c = $c<br>";

    $c /= $b; 
    echo "\$c /= $b; => c = $c<br>";

    $c %= $b; 
    echo "\$c %= $b; => c = $c<br>";
    ?>

    <h2>Comparison Operators</h2>
    <?php
    echo "$a == $b : " . ($a == $b ? 'true' : 'false') . "<br>";
    echo "$a != $b : " . ($a != $b ? 'true' : 'false') . "<br>";
    echo "$a > $b : " . ($a > $b ? 'true' : 'false') . "<br>";
    echo "$a < $b : " . ($a < $b ? 'true' : 'false') . "<br>";
    echo "$a >= $b : " . ($a >= $b ? 'true' : 'false') . "<br>";
    echo "$a <= $b : " . ($a <= $b ? 'true' : 'false') . "<br>";
    ?>

    <h2>Logical Operators</h2>
    <?php
    $x = true;
    $y = false;

    echo "\$x AND \$y : " . ($x && $y ? 'true' : 'false') . "<br>";
    echo "\$x OR \$y : " . ($x || $y ? 'true' : 'false') . "<br>";
    echo "NOT \$x : " . (!$x ? 'true' : 'false') . "<br>";
    ?>

    <h2>String Operators</h2>
    <?php
    $str1 = "Hello";
    $str2 = "World";

    echo "\$str1 . \$str2 = " . ($str1 . $str2) . "<br>"; // Concatenation
    $str1 .= $str2;
    echo "\$str1 .= \$str2; => str1 = $str1<br>"; // Concatenation assignment
    ?>

    <h2>Increment/Decrement Operators</h2>
    <?php
    $d = 5;
    echo "\$d = $d<br>";
    echo "++\$d = " . (++$d) . "<br>"; // Pre-increment
    echo "\$d++ = " . ($d++) . "<br>"; // Post-increment
    echo "\$d = $d<br>";
    echo "--\$d = " . (--$d) . "<br>"; // Pre-decrement
    echo "\$d-- = " . ($d--) . "<br>"; // Post-decrement
    echo "\$d = $d<br>";
    ?>
</body>
</html>
