<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combined Page</title>
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
        .btn,
        .link-btn,
        .secondary-link-btn {
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            transition: background-color 0.3s, transform 0.2s;
        }
        .btn {
            background-color: #FF4500;
            color: #FFF;
        }
        .btn:hover {
            background-color: #FF6600;
            transform: scale(1.05);
        }
        .link-btn,
        .secondary-link-btn {
            background-color: #4CAF50;
            color: #FFF;
            transition: background-color 0.3s, transform 0.2s;
            display: inline-block;
            margin-right: 10px;
        }
        .link-btn:hover,
        .secondary-link-btn:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }
        .secondary-link-btn {
            margin-top: 10px;
            display: block;
        }
        .audio-controls {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 2;
        }
        #audioPlayer1,
        #audioPlayer2 {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 2;
        }
        .dialog {
            background-color: rgba(0, 0, 0, 0.8);
            color: #FFF;
            border-radius: 10px;
            padding: 10px;
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 2;
            display: none;
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
        <a href="https://www.youtube.com/@HAITHAM-ps8vy/videos" class="link-btn">Visit YouTube Channel</a>
    </div>

    <div class="audio-controls">
        <a href="https://youtu.be/Vw9ieCaPhmk?si=h7t-T1EjnTgglFe-" target="_blank" class="link-btn">How to Video</a>
        <a href="https://mega.nz/file/9TUlGabA#8GyqTmJX7vD2r8G45fjguom9CVfHNl9a1cRvbsHFB8Y" target="_blank" class="link-btn">Monterey macOS ISO</a>
        <a href="https://youtu.be/fACRP3DWWbk" target="_blank" class="secondary-link-btn">How to make VMware full screen in macOS 12</a>
    </div>

    <!-- Audio players with controls and loop attribute -->
    <h2>Assalamu Alayka</h2>
    <audio id="audioPlayer1" controls loop>
        <source src="Assalamu Alayka.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <div id="dialog1" class="dialog">
        <p>Assalamu Alayka - Description Here</p>
    </div>

    <h2>طاهر قلبي نقي ذاكر لله</h2>
    <audio id="audioPlayer2" controls loop>
        <source src="طاهر قلبي نقي ذاكر لله.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <div id="dialog2" class="dialog">
        <p>طاهر قلبي نقي ذاكر لله - Description Here</p>
    </div>

    <script>
        // JavaScript to show/hide the dialog for each audio player
        const dialog1 = document.getElementById('dialog1');
        const dialog2 = document.getElementById('dialog2');
        const audioPlayer1 = document.getElementById('audioPlayer1');
        const audioPlayer2 = document.getElementById('audioPlayer2');

        audioPlayer1.addEventListener('play', function() {
            dialog1.style.display = 'block';
        });

        audioPlayer1.addEventListener('pause', function() {
            dialog1.style.display = 'none';
        });

        audioPlayer2.addEventListener('play', function() {
            dialog2.style.display = 'block';
        });

        audioPlayer2.addEventListener('pause', function() {
            dialog2.style.display = 'none';
        });
    </script>
</body>
</html>
