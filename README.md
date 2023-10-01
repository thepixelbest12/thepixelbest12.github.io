<!DOCTYPE html>
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
            background-color: #006400; /* Dark Green */
            color: #FFF; /* White */
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #333; /* Dark Gray */
            padding: 20px;
        }
        header a {
            color: #FFF;
            text-decoration: none;
            margin-right: 20px; /* Corrected margin property */
            font-weight: bold;
        }
        .hero {
            background-color: #FFD700; /* Dark Yellow */
            padding: 60px 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 36px;
        }
        .hero p {
            font-size: 18px;
            color: #000; /* Set text color to black */
        }
        .btn {
            background-color: #FF4500; /* Orange Red */
            color: #FFF;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .online-users {
            background-color: #333; /* Dark Gray */
            color: #FFF;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Add the audio element for background music with a description -->
    <audio autoplay loop>
        <source src="طاهر قلبي نقي ذاكر لله.mp3" type="audio/mpeg">
        Your browser does not support the audio element. Please enjoy the background music.
    </audio>

    <!-- Header section -->
    <header>
        <h1>Welcome to thepixelbest12</h1>
        <nav>
            <ul>
                <!-- You can add navigation links here if needed -->
            </ul>
        </nav>
    </header>

    <!-- Main content section -->
    <main>
        <!-- Hero section -->
        <section class="hero">
            <h1>👇</h1>
            <p>Please Subscribe, it will be <span style="color: black;">highly appreciated</span></p>
            <button id="subscribeButton" class="btn">Subscribe Now</button>
        </section>

        <!-- Cookies count section -->
        <section>
            <p><span id="cookiesCount">0</span> visitors have seen this page.</p>
        </section>

        <!-- Online users count section -->
        <section class="online-users">
            <p><span id="onlineUsersCount">Loading...</span> online users are currently visiting this site.</p>
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

            // Open the YouTube link in a new tab with the "noopener" attribute
            window.open('https://www.youtube.com/channel/UCJaTw3e1tqrff_nTTZmChzQ', '_blank', 'noopener');
        }

        // Function to update the cookies count
        function updateCookiesCount() {
            // Check if the 'cookies' cookie is set
            if (document.cookie.includes('cookies=true')) {
                // If the cookie exists, do nothing (don't update the count)
            } else {
                // If the cookie doesn't exist, update the count
                // Get the current cookies count from the HTML
                var countElement = document.getElementById('cookiesCount');
                var count = parseInt(countElement.textContent);
                // Increment the count by 1
                count++;
                // Update the HTML element to display the new count
                countElement.textContent = count;
                // Set a 'cookies' cookie to prevent further count updates for the same person
                document.cookie = 'cookies=true; max-age=3600'; // The cookie will expire in 1 hour (3600 seconds)
            }
        }

        // Function to update the online users count using AJAX
        function updateOnlineUsersCount() {
            // Simulate the online users count with a random number (you can replace this with your real logic)
            var onlineUsers = Math.floor(Math.random() * 100);
            document.getElementById('onlineUsersCount').textContent = onlineUsers;
        }

        // Update the online users count when the page loads and every 5 seconds (you can adjust this interval)
        updateOnlineUsersCount();
        setInterval(updateOnlineUsersCount, 5000); // 5000 milliseconds = 5 seconds

        // Call the updateCookiesCount function when the page loads to update the count
        window.onload = updateCookiesCount;

        // Add a click event listener to the Subscribe button
        document.getElementById('subscribeButton').addEventListener('click', sendMessageAndOpenLink);
    </script>
</body>
</html>

