<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Song Lyrics</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
            overflow: hidden;
        }
        .line {
            font-size: 2rem;
            opacity: 0;
            margin: 5px;
            transition: opacity 1.5s ease-in-out, color 1.5s ease-in-out;
        }
    </style>
</head>
<body>

<div id="lyrics-container"></div>

<script>
    const lyrics = [
        "Ami je tomar",
        "Shudu je tomar",
        "Ami je tomar",
        "Ami je tomar",
        "Shudu je tomar",
        "Ami je tomar",
        "Meri chahte toh",
        "Fiza mein bahengi",
        "Zinda rahengi",
        "Hoke fanaa",
        "Saason mein saason mein",
        "Teri sargame hai",
        "ab raat din",
        "Zindagi meri to",
        "kuchh na ab tere bin",
        "Saason mein saason mein",
        "Teri sargame hai",
        "ab raat din",
        "Zindagi meri to",
        "kuchh na ab tere bin",
        "Teri dhadkon",
        "ki sargoshi",
        "Meri dhadkano",
        "mein bajti hai",
        "Meri jagti",
        "nigahon mein",
        "Khwahish teri",
        "hi sajti hai",
        "Mere khayalo",
        "mein har pal",
        "Tere khyaal",
        "shaamil hai",
        "Lamhein",
        "judaiyon wale",
        "Mushkil bade",
        "hi mushkil hai",
        "O piya"
    ];

    const container = document.getElementById('lyrics-container');

    // Function to display each line with animation
    function displayLine(line, index) {
        const lineElement = document.createElement('div');
        lineElement.classList.add('line');
        lineElement.textContent = line;
        container.appendChild(lineElement);

        // Delay the fade-in effect and color change
        setTimeout(() => {
            lineElement.style.opacity = 1;
            lineElement.style.color = getRandomColor();
        }, index * 2000); // 2 seconds delay between each line
    }

    // Loop through lyrics and display each line
    lyrics.forEach((line, index) => {
        displayLine(line, index);
    });

    // Function to generate random colors
    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
</script>

</body>
</html>
