<?php
include 'inc/header.php';
require __DIR__ . '/users/users.php';

if (!isset($_GET['id'])) {
    include "inc/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "inc/not_found.php";
    exit;
}

$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'address' => "",
    'password' => "",
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = updateUser($_POST, $userId);
        header("Location: userlist.php");
    }
}

?>

<?php include 'form.php' ?>
