<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Display</title>

</head>
<body>
    <div id="temp-container">
        <div class="temperature" id="temperature"></div>
        <div class="message" id="message"></div>
    </div>

    <script>
        // Function to display temperature
        function displayTemperature(temp) {
            const tempContainer = document.getElementById('temp-container');
            const tempElement = document.getElementById('temperature');
            const messageElement = document.getElementById('message');

            if (temp >= 30 && temp <= 100) {
                tempElement.textContent = `Temperature: ${temp}°F`;
                messageElement.textContent = "The temperature is nice.";
            } else {
                tempElement.textContent = `Temperature: ${temp}°F`;
                messageElement.textContent = "The temperature is outside the nice range.";
            }
        }

        // Example temperature value
        const temperature = 75; // You can change this value for testing
        displayTemperature(temperature);
    </script>
</body>
</html> -->
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
