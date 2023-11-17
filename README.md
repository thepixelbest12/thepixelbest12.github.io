<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Subscribe</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico" sizes="32x32">

    <style>
        body {
            background-image: url('Apple in universe.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            color: #FFF;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            text-align: center;
            position: fixed;
            width: 100%;
            z-index: 1;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        header a {
            color: #FF4500;
            text-decoration: none;
            margin: 0 20px;
            font-weight: bold;
            font-size: 18px;
        }
        .hero {
            padding: 100px 0;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 20px;
        }
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 24px;
            margin-bottom: 40px;
        }
        .btn {
            background-color: #FF4500;
            color: #FFF;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            transition: background-color 0.3s, transform 0.2s;
        }
        .btn:hover {
            background-color: #FF6600;
            transform: scale(1.05); /* Add scale effect on hover */
        }
        .audio-controls {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 2;
        }
        #audioPlayer {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 2;
        }
        .loop-btn {
            background-color: #FF4500;
            color: #FFF;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 10px;
            transition: background-color 0.3s, transform 0.2s;
        }
        /* Additional style for the download link */
        .download-btn {
            background-color: #4CAF50;
            color: #FFF;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 10px;
            transition: background-color 0.3s, transform 0.2s;
        }
        .download-btn:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <header>
        <a href="#">Home</a>
        <a href="about.html">About Us</a>
    </header>

    <div class="hero">
        <h1>Welcome to the channel</h1>
        <p>Join our community and discover incredible content. Subscribe now for exciting updates!</p>
        <a href="https://www.youtube.com/channel/UCJaTw3e1tqrff_nTTZmChzQ" class="btn">Subscribe Now</a>
    </div>

    <div class="audio-controls">
        <!-- Loop button in the top left corner -->
        <button class="loop-btn" id="loopButton" onclick="toggleLoop()">Loop: Off</button>

        <!-- Download link for the Monterey macOS ISO file -->
        <a href="https://example.com/path/to/Monterey-macOS.iso" download class="download-btn">Download Monterey macOS</a>
    </div>

    <!-- Audio player with controls and loop attribute -->
    <audio id="audioPlayer" controls loop>
        <source src="طاهر قلبي نقي ذاكر لله.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <script>
        // Get reference to the loop button
        const loopButton = document.getElementById('loopButton');

        // Add event listener to the loop button
        function toggleLoop() {
            const audioPlayer = document.getElementById('audioPlayer');
            if (audioPlayer.loop) {
                audioPlayer.loop = false;
                loopButton.textContent = 'Loop: Off';
            } else {
                audioPlayer.loop = true;
                loopButton.textContent = 'Loop: On';
            }
        }
    </script>
</body>
</html>
