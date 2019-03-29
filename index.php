<?php include('inc/header.php'); ?>
<div class="container">
      <div class="jumbotron">
        <h1 class="display-4 text-center text-success">CRUD APPLICATION JSON</h1>
        <hr class="my-4">
    <form action="auth.php" method="POST" class="col-sm-8 offset-2">
        <div class="form-group">
            <label>Username</label>
            <input name="username" value="" id="username" class="form-control" required="">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input name="password" value="" id="password" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-success" value="Login">Login</button>
    </form>
               <hr class="my-4">
               <p class="text-center text-primary">INFO: This Project I using PHP, JavaScripts, Json, jquery, Ajax & Bootstrap responsive design. Login this form please using users.json file username & password. That means thay are Admin. After login thay can manage users, Edit information, Update & Delete that means user CRUD Operation. In this way 'users.json' file user's data updated :) </p>
      </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>