<!DOCTYPE html>
<html>
<head>
    <title>Temp Checker</title>
</head>
<body>
    <h2>Check if a Temp is nice or not</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if (is_numeric($number)) {
            if ($number >30 && $number) {
                echo "<p>$number is temp is nice.</p>";
            } else {
                echo "<p>$number is not nice temp.</p>";
            }
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }
    ?>
</body>
</html>
