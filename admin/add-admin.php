<?php include_once('p/menu.php') ;?>

<?php
    include_once('../admin/classes/admin.php');
    $admin = new Admin();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $admin->AAdmin($_POST);
         header('Location: manage-admin.php');
    }

?>  

<head>
  <meta charset="UTF-8">
  <title></title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

  <div class="main-content">
    <div class="wrapper">
      <h1>Add Admin</h1>
      </br>
         <form method="POST">  
        <table class="tbl-admin">
          <tr>
            <td>Full Name: </td>
            <td><input type="text" name="fullname" placeholder="Enter the fullname" required></td>
          </tr>
          <tr>
            <td>User Name: </td>
            <td><input type="text" name="username" placeholder="Enter the username" required></td>
          </tr>
          <tr>
            <td>Password: </td>
            <td><input type="password" name="password" placeholder="Enter the password" required></td>
          </tr>
          <tr>
           <td><input type="submit" value="add admin" class="btn-secondary"></td>
          </tr>
        </table>
       
          
         
        </form>
    </div>
  </div>
<?php include('p/footer.php'); ?>
