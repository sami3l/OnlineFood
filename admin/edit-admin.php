<?php include_once('p/menu.php') ;?>

<?php

include_once('../admin/classes/admin.php');
  $admin = new Admin() ;
  
    if(isset($_GET["id"])){

      $id = $_GET["id"];
    } 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $admin->update($_POST , $_FILES , $id);
       header('Location: manage-admin.php');
  }
    
?>  

  <div class="main-content">
    <div class="wrapper">
      <h1>Edit Admin</h1>
      <?php 
          $getadmin = $admin->showid($id) ;
            if($getadmin){
              while($row = mysqli_fetch_assoc($getadmin)){
                
              ?>

              <form method="POST">  
          <table class="tbl-admin">
          <tr>
            <td>Full Name: </td>
            <td><input type="text" name="fullname" value="<?=$row['full_name']?>" required></td>
          </tr>
          <tr>
            <td>User Name: </td>
            <td><input type="text" name="username" value="<?=$row['username']?>" required></td>
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
