<?php
session_start(); // Start a session to track users

// Function to get the count of online users
function getOnlineUsersCount() {
    $sessionPath = ini_get('session.save_path'); // Get the session save path
    $sessionFiles = glob($sessionPath . '/*'); // Get all session files
    $onlineCount = 0;

    foreach ($sessionFiles as $file) {
        if (is_file($file)) {
            $contents = file_get_contents($file);

            if (strpos($contents, $_SERVER['REMOTE_ADDR']) !== false) {
                $onlineCount++;
            }
        }
    }

    return $onlineCount;
}

echo "Online Users: " . getOnlineUsersCount();
?>
