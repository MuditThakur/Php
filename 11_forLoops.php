<?php
// Define an array
$arr = array(1, 2, 3, 4);

// Loop through the array by reference and modify the values
foreach ($arr as &$value) {
    $value = $value * 2;  // Multiply each value by 2
    echo $value." ";  // Print each modified value
}
// The $arr is now array(2, 4, 6, 8)
unset($value); // Break the reference with the last element

echo "<br>";

// Define an associative array
$superhero = array(
  "name" => "Shubham",
  "email" => "ShubhamPunjaban@gmail.com",
  "age" => "21",
);

// Loop through the associative array and print key-value pairs
foreach ($superhero as $key => $value) {
  echo $key . ":" . $value . "<br>";
}
for ($i = 0; $i < 50; $i++) {
  
  if($i%2==0){
    echo "$i <br>";;
  }
  if($i == 20){
    break;
  }
}
?>
