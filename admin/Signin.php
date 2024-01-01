<?php include('../config/config.php') ?>   

<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <title>Login Page For admins</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center">Login</h2>
            <form method="POST">
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" required>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Login">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php
if(isset($_POST["submit"])) {
   
    $username = $_POST["username"];
    $password = $_POST["password"];

    include_once('../admin/classes/admin.php');
    $admin = new Admin();

        $auth = $admin->login($username , $password );

        if($auth){
          header('Location: manage-admin.php');
        }
         
  
        
}
?>


