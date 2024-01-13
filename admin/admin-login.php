
<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
    <header>
      <div class="container-fluid">
     
        <div class="container">

          <div class="jumbotron">
            <h1>Login As Admin</h1> <br>
            <form class="" action="Alogin.php" method="POST"> <br><br>
              <input type="username" class="form-control" placeholder="Usename/ Email Address" name="mail" value="">
              <br>
              <input type="password" class="form-control" placeholder="Password" name="pass" value="">
              <br><br>

              <div class="loginbutton">
                <button type="submit" class="btn btn-success btn-lg" name="login" >Login</button>
                

              </div>
              </form>

        

  </header>
  <footer class="page-footer font-small blue">

  <div class="footer-copyright text-center py-3">© 2023 Copyright:
      <a href="">elsami337@gmail.com</a>
    </div>
  </footer>
  </body>

</html>
