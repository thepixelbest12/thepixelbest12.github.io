<?php
session_start();

// Track user activity
$_SESSION['last_activity'] = time();

// Calculate online users
$onlineUsers = 0;
$timeout = 300; // 5 minutes in seconds

foreach ($_SESSION as $key => $value) {
    if ($key === 'last_activity' && (time() - $value) <= $timeout) {
        $onlineUsers++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Users Count</title>
</head>
<body>
    <h1>Online Users Count</h1>
    <p>Currently <?php echo $onlineUsers; ?> users are online.</p>
</body>
</html>
