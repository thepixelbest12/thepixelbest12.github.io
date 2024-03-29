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
            right: 20px;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        .dialog {
            background-color: rgba(0, 0, 0, 0.8);
            color: #FFF;
            border-radius: 10px;
            padding: 10px;
            margin-top: 10px;
            display: none;
        }
        audio {
            margin-bottom: 10px;
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
        <div class="dialog" id="dialog1">
            <p>Assalamu Alayka - Description Here</p>
        </div>
        <audio controls loop onclick="toggleDialog('dialog1')">
            <source src="Assalamu Alayka.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <div class="dialog" id="dialog2">
            <p>طاهر قلبي نقي ذاكر لله - Description Here</p>
        </div>
        <audio controls loop onclick="toggleDialog('dialog2')">
            <source src="طاهر قلبي نقي ذاكر لله.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>

    <script>
        function toggleDialog(dialogId) {
            var dialog = document.getElementById(dialogId);
            dialog.style.display = (dialog.style.display === "none") ? "block" : "none";
        }
    </script>
</body>
</html>
