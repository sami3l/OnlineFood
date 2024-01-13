<?php include_once('p/menu.php') ;?>

<?php

include_once('../admin/classes/client.php');
  $client = new Client() ;
  
    if(isset($_GET["id"])){

      $id = $_GET["id"];
    } 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $client->update($_POST , $_FILES , $id);
       header('Location: manage-user.php');
  }
    
?>  

  <div class="main-content">
    <div class="wrapper">
      <h1>Edit Admin</h1>
      <?php 
          $getclient = $client->showid($id) ;
            if($getclient){
              while($row = mysqli_fetch_assoc($getclient)){
                
              ?>

              <form method="POST">  
          <table class="tbl-admin">
          <tr>
            <td>username: </td>
            <td><input type="text" name="username" value="<?=$row['username']?>" required></td>
          </tr>
          <tr>
            <td>password: </td>
            <td><input type="text" name="password" value="<?=$row['password']?>" required></td>
          </tr>

          <tr>
           <td><input type="submit" value="Edit Admin" class="btn-secondary"></td>
          </tr>
          </table>
             </form>

              <?php 

             }
            }
      ?>
      </br>
         
    </div>
  </div>
<?php include('p/footer.php'); ?>
