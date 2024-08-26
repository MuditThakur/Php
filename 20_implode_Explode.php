<?php
// Example of explode
$string = "apple,banana,orange";
$delimiter = ",";
$array = explode($delimiter, $string);

echo "Array after explode:\n";
print_r($array);

// Example of implode
$newString = implode($delimiter, $array);

echo "String after implode:\n";
echo $newString;
?>
