<!DOCTYPE html>
<html>
<body>

<?php
// Global variable
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $color . "<br>";
echo "My boat is " . $color . "<br>";

$x = 10;
var_dump($x);
echo "<br>";

var_dump("hello");
echo "<br>";

var_dump(10.53);
echo "<br>";

var_dump(null);
echo "<br>";

var_dump([10, 20, 44]);
echo "<br>";  // Fixed syntax error here
?>

<?php
$name = "John";
$age = 30;

$message = "Hello, my name is $name and I am $age years old.";

echo $message;
?>

<?php 
// Local and static variable example
function abc() {
  static $a = 4;  // Static variable
  echo $a . "<br>";
  $a++;
}

abc();
abc();
abc();
?>

<?php
// Global and local variable example
$globalVar = "I am a global variable";

function testGlobal() {
  global $globalVar;  // Accessing global variable inside function
  $localVar = "I am a local variable";
  
  echo $globalVar . "<br>";
  echo $localVar . "<br>";
}

testGlobal();

// Trying to access local variable outside the function will cause an error
// Uncommenting the following line will cause an error
// echo $localVar;
?>

<?php
// OOP Example

class Car {
  // Properties
  public $color;
  public $model;

  // Constructor
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }

  // Method
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . ".";
  }
}

// Create an object
$myCar = new Car("red", "Toyota");
echo $myCar->message() . "<br>";

// Another object
$anotherCar = new Car("blue", "Ford");
echo $anotherCar->message() . "<br>";
?>

</body>
</html>
