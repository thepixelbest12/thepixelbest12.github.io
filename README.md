<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Subscribe</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico" sizes="32x32">

    <style>
        /* Your existing styles here... */

        /* Added style for the sound control button */
        .audio-controls {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 2;
        }

        /* Added style for the loop button */
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
    </style>
</head>
<body>
    <!-- Your existing HTML code here... -->

    <!-- Audio controls (play/pause button) -->
    <div class="audio-controls">
        <!-- Added loop button -->
        <button class="loop-btn" id="loopButton" onclick="toggleLoop()">Loop: Off</button>
        <button id="playPauseButton">Play</button>
    </div>

    <script>
        // Your existing script here...

        // Get reference to the loop button
        const loopButton = document.getElementById('loopButton');

        // Add event listener to the loop button
        function toggleLoop() {
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
</html
