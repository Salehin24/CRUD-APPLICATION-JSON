<?php include('inc/header.php'); ?>
<div class="container">
      <div class="jumbotron">
        <h1 class="display-4 text-center text-success">CRUD APPLICATION JSON</h1>
        <hr class="my-4">
        <form action="" method="POST" class="col-sm-8 offset-2">
          <div class="form-group">
            <label>Name</label>
                    <input name="name" value="<?php echo $user['name'] ?>"
                           class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['name'] ?>
                    </div>
          </div>
        <div class="form-group">
        <label>Username</label>
                    <input name="username" value="<?php echo $user['username'] ?>"
                           class="form-control <?php echo $errors['username'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['username'] ?>
                    </div>
        </div>
        <div class="form-group">
        <label>Email</label>
                    <input name="email" value="<?php echo $user['email'] ?>"
                           class="form-control  <?php echo $errors['email'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['email'] ?>
                    </div>
        </div>
        <div class="form-group">
        <label>Address</label>
                    <input name="address" value="<?php echo $user['address'] ?>"
                           class="form-control  <?php echo $errors['address'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['address'] ?>
                    </div>
        </div>
        <div class="form-group">
        <label>Password</label>
                    <input name="password" value="<?php echo $user['password'] ?>" class="form-control">

        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <a class="btn btn-success btn-md" href="userlist.php" role="button">User List</a>
    </form>
      </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>