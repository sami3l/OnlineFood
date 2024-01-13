<?php include_once('p/menu.php') ;?>

<?php
    include_once('../admin/classes/client.php');
    $admin = new Client();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $admin->Add($_POST);
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
      <h1>Add users</h1>
      </br>
         <form method="POST">  
        <table class="tbl-admin">

        <tr>
            <td>joined date: </td>
            <td><td><input type="text" name="joined" placeholder="0000-00-00" required></td></td>
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
           <td><input type="submit" value="add user" class="btn-secondary"></td>
          </tr>
        </table>
       
          
         
        </form>
    </div>
  </div>
<?php include('p/footer.php'); ?>
