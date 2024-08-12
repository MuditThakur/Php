<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Structures Demo</title>
</head>
<body>

<h1>PHP Control Structures</h1>

<h2>Conditional Statement (if-else)</h2>
<?php
$age = 20;
if ($age >= 18) {
    echo "<p>You are an adult.</p>";
} else {
    echo "<p>You are a minor.</p>";
}
?>

<h2>For Loop (Numbers from 1 to 5)</h2>
<ul>
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "<li>Number: $i</li>";
}
?>
</ul>

<h2>While Loop (Countdown from 5)</h2>
<ul>
<?php
$count = 5;
while ($count > 0) {
    echo "<li>Count: $count</li>";
    $count--;
}
?>
</ul>

<h2>Do-While Loop Example</h2>
<?php
$count = 0;
do {
    echo "<p>This will be printed at least once.</p>";
    $count++;
} while ($count < 1);
?>

<h2>Switch Statement (Day of the Week)</h2>
<?php
$dayOfWeek = 3;
switch ($dayOfWeek) {
    case 1:
        echo "<p>Today is Monday.</p>";
        break;
    case 2:
        echo "<p>Today is Tuesday.</p>";
        break;
    case 3:
        echo "<p>Today is Wednesday.</p>";
        break;
    case 4:
        echo "<p>Today is Thursday.</p>";
        break;
    case 5:
        echo "<p>Today is Friday.</p>";
        break;
    case 6:
        echo "<p>Today is Saturday.</p>";
        break;
    case 7:
        echo "<p>Today is Sunday.</p>";
        break;
    default:
        echo "<p>Invalid day of the week.</p>";
        break;
}
?>

<h2>Foreach Loop (Colors)</h2>
<ul>
<?php
$colors = ["Red", "Green", "Blue"];
foreach ($colors as $color) {
    echo "<li>Color: $color</li>";
}
?>
</ul>

</body>
</html>
