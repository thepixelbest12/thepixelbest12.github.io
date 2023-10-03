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
        }
        header a {
            color: #FFF;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }
        .hero h1 {
            font-size: 36px;
        }
        .hero p {
            font-size: 18px;
        }
        .btn {
            background-color: #FF4500;
            color: #FFF;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <audio id="backgroundAudio" loop>
        <source src="طاهر قلبي نقي ذاكر لله.mp3" type="audio/mpeg">
        Your browser does not support the audio element. Please enjoy the background music.
    </audio>
    
</header>

    <main>
        <section class="hero">
            <h1>👇</h1>
            <p>Please Subscribe</p>
            <button id="subscribeButton" class="btn">Subscribe Now</button>
            <button id="pressButton" class="btn">Press</button>
        </section>
    </main>

    <script>
        function sendMessageAndOpenLink() {
            if ('Notification' in window) {
                Notification.requestPermission().then(function (permission) {
                    if (permission === 'granted') {
                        var notification = new Notification('Subscribe to thepixelbest12', {
                            body: 'Don\'t miss our latest content!',
                        });
                    }
                });
            }

            window.open('https://www.youtube.com/channel/UCJaTw3e1tqrff_nTTZmChzQ');
        }

        document.getElementById('subscribeButton').addEventListener('click', sendMessageAndOpenLink);

        var audio = document.getElementById('backgroundAudio');
        var pressButton = document.getElementById('pressButton');
        pressButton.addEventListener('click', function() {
            if (audio.paused) {
                audio.play();
                pressButton.textContent = "Pause";
            } else {
                audio.pause();
                pressButton.textContent = "Press";
            }
        });
    </script>
</body>
</html>

