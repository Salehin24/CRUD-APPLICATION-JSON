<?php
include 'inc/header.php';
require __DIR__ . '/users/users.php';


if (!isset($_POST['id'])) {
    include "inc/not_found.php";
    exit;
}
$userId = $_POST['id'];
deleteUser($userId);

header("Location: userlist.php");