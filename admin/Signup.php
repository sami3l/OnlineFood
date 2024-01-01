
<?php
    include_once('../admin/classes/admin.php');
    $admin = new Admin();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $admin->AAdmin($_POST);
        header('Location: index.html');
    }
    

?>  

<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <title>Register Page</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center">Register Page</h2>
            <form method="POST">
            <div class="form-group">
                <label for="full_name">fullname:</label>
                <input type="text" class="form-control" name="fullname" required>
              </div>
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" required>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Sign Up">
                <a href="login.php"> sign in</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
 