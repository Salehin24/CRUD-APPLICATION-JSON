<?php
include ("password.php");

if ($_POST) {
    // Email validation
    $username = $_POST['username'];

    // Load database
    $db = json_decode(file_get_contents('users/db.json'), true);

    // Search username in database
    if (array_key_exists($username, $db)) {
        // Password verification
        $verification = password_verify($_POST['password'], $db[$username]);
    }

    echo ($verification)
    ? 'Authentication success.'
    : 'Authentication failed.';

    header("Location: userlist.php");
}
