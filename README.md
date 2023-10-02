<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thepixelbest12 - Subscribe</title>
    <link rel="stylesheet" href="styles.css">
    
    <!-- Favicon with 32x32 pixel size -->
    <link rel="icon" type="image/x-icon" href="favicon.ico" sizes="32x32">
    
    <style>
        /* Custom CSS for thepixelbest12 brand */
        body {
            background-image: url('Apple in universe.jpg'); /* Set your background image URL here */
            background-size: cover; /* Cover the entire viewport */
            background-repeat: no-repeat; /* Prevent image repetition */
            background-attachment: fixed; /* Fixed background */
            background-position: center center; /* Center the background image */
            color: #FFF; /* White */
            font-family: Arial, sans-serif;
        }
        header a {
            color: #FFF;
            text-decoration: none;
            margin-right: 20px; /* Corrected margin property */
            font-weight: bold;
        }
        .hero h1 {
            font-size: 36px;
        }
        .hero p {
            font-size: 18px;
        }
        .btn {
            background-color: #FF4500; /* Orange Red */
            color: #FFF;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer; /* Add a pointer cursor */
        }
    </style>
</head>
<body>
    <!-- Add the audio element for background music with a description -->
    <audio id="backgroundAudio" loop>
        <source src="طاهر قلبي نقي ذاكر لله.mp3" type="audio/mpeg">
        Your browser does not support the audio element. Please enjoy the background music.
    </audio>

    <!-- Header section -->
    <header>
        <!-- You can add navigation links here if needed -->
    </header>

    <!-- Main content section -->
    <main>
        <!-- Hero section -->
        <section class="hero">
            <h1>👇</h1>
            <p>Please Subscribe</p>
            <button id="subscribeButton" class="btn">Subscribe Now</button>
            <!-- Button for mobile users to control audio playback -->
            <button id="pressButton" class="btn">Press</button>
        </section>
        <!-- Visitors count section -->
        <section>
            <p><span id="visitorsCount">0</span> visitors have seen this page.</p>
        </section>
    </main>

    <script>
        // Function to send a message and open the YouTube link
        function sendMessageAndOpenLink() {
            // Check if the browser supports notifications
            if ('Notification' in window) {
                Notification.requestPermission().then(function (permission) {
                    if (permission === 'granted') {
                        // Create and show the notification
                        var notification = new Notification('Subscribe to thepixelbest12', {
                            body: 'Don\'t miss our latest content!',
                        });
                    }
                });
            }

            // Open the YouTube link in a new tab
            window.open('https://www.youtube.com/channel/UCJaTw3e1tqrff_nTTZmChzQ');
        }

        // Initialize the visitor count variable
        var visitorsCount = 0;

        // Function to update the visitors count
        function updateVisitorsCount() {
            // Increment the count
            visitorsCount++;

            // Update the HTML element to display the count
            document.getElementById('visitorsCount').textContent = visitorsCount;
        }

        // Call the updateVisitorsCount function when the page loads to update the count
        updateVisitorsCount();

        // Add a click event listener to the Subscribe button
        document.getElementById('subscribeButton').addEventListener('click', sendMessageAndOpenLink);

        // Add a click event listener to the mobile button to control audio playback
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
