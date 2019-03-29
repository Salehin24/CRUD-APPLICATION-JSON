<?php
include 'inc/header.php';
require __DIR__ . '/users/users.php';


$user = [
    'id' => '',
    'name' => '',
    'username' => '',
    'email' => '',
    'address' => '',
    'password' => '',
];

$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'address' => "",
    'password' => "",
];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = createUser($_POST);

        header("Location: userlist.php");
    }
}

?>

<?php include 'form.php' ?>

