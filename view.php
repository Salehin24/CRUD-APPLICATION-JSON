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

?>

<div class="container">
      <div class="jumbotron">
        <h1 class="display-4 text-center text-success">CRUD JSON</h1>
        <hr class="my-4">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="delete.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Name:</th>
                <td><?php echo $user['name'] ?></td>
            </tr>
            <tr>
                <th>Username:</th>
                <td><?php echo $user['username'] ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo $user['email'] ?></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><?php echo $user['address'] ?></td>
            </tr>
            <tr>
                <th>Password:</th>
                <td>
                    <a target="_blank" href="<?php echo $user['password'] ?>">
                        <?php echo $user['password'] ?>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>