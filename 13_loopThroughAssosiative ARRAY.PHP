<?php 
$courses = array('INT220' => "PHP", 'INT221' => "Laravel", 'INT222' => "Node.js");
$keys = array_keys($courses);
$values = array_values($courses);

for ($x = count($courses); $x > 0; $x--) {
    echo "Key = " . $keys[$x] . " : Value = " . $values[$x] . "<br>";
}
?>
