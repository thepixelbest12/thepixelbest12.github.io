<!DOCTYPE html>
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
            transform: scale(1.05);
        }
        .about-section {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 100px 0;
            text-align: center;
            border-radius: 20px;
        }
        .about-section h2 {
            font-size: 36px;
            color: #FF4500;
            margin-bottom: 20px;
        }
        .about-section p {
            font-size: 20px;
            color: #FFF;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <header>
        <a href="#" target="_blank">Home</a> <!-- Opens in a new tab -->
        <a href="about.html" target="_blank">About Us</a> <!-- Opens in a new tab -->
    </header>

    <div class="hero">
        <h1>👇 Welcome to Our Channel 👇</h1>
        <p>Join our community and discover incredible content. Subscribe now for exciting updates!</p>
        <a href="https://www.youtube.com/channel/UCJaTw3e1tqrff_nTTZmChzQ" class="btn" target="_blank">Subscribe Now</a> <!-- Opens in a new tab -->
    </div>

    <section class="about-section" id="about">
        <h2>About Us</h2>
        <p>We are thepixelbest12, a team of passionate content creators dedicated to delivering top-quality content that entertains, educates, and inspires. From captivating videos to informative tutorials, our channel has it all. Subscribe now to become part of our growing community!</p>
    </section>

    <!-- Audio player with controls -->
    <audio id="audioPlayer" controls>
        <source src="طاهر قلبي نقي ذاكر لله.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- Audio controls (play/pause button) -->
    <div class="audio-controls">
        <button id="playPauseButton">Play</button>
    </div>

    <script>
        // Get references to the audio player and play/pause button
        const audioPlayer = document.getElementById('audioPlayer');
        const playPauseButton = document.getElementById('playPauseButton');

        // Add event listener to the play/pause button
        playPauseButton.addEventListener('click', function () {
            if (audioPlayer.paused) {
                audioPlayer.play();
                playPauseButton.textContent = 'Pause';
            } else {
                audioPlayer.pause();
                playPauseButton.textContent = 'Play';
            }
        });
    </script>
</body>
</html>
