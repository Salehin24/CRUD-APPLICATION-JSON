<?php
require 'users/users.php';
$users = getUsers();
include 'inc/header.php';
?>

    <div class="container">
      <div class="jumbotron">
        <h1 class="display-4 text-center text-success">User List</h1><br>
        <a class="btn btn-warning btn-md text-white" href="create.php" role="button">+Add New</a>
        <table class="table bg-success">
        <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        <?php foreach ($users as $user): ?>
    <tr>
      <th scope="row" class="text-white"><?php echo $user['id'] ?></th>
      <td class="text-white"><?php echo $user['name'] ?></td>
      <td class="text-white"><?php echo $user['username'] ?></td>
      <td class="text-white"><?php echo $user['email'] ?></td>
      <td class="text-white"><?php echo $user['address'] ?></td>
      <td class="text-white"><?php echo $user['password'] ?></td>
      <td>
        <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-info">View</a> ||
        <a href="update.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-primary">Edit</a> ||
        <form method="POST" action="delete.php">
            <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Delete</button>
        </form>
      </td>
    </tr>
    <?php endforeach;; ?>
  </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">!! Hay</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <div class="modal-body">
                   <h4>Are you want to delete?</h4>
                 </div>
                 <div class="modal-footer">
                   <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                   <a type="button" href="delete.php?id=<?php echo $user['id'] ?>" class="btn btn-primary">Delete</a>
                 </div>
               </div>
             </div>
           </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js")}}"></script>
  </body>
</html>