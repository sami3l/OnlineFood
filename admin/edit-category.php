
<?php include_once('p/menu.php') ;

?>


<?php
    include_once('../admin/classes/category.php');
    $Category = new Category();
    
    if(isset($_GET["id"])){

      $id = $_GET["id"];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Category->update($_POST , $_FILES , $id);
        header('Location: manage-category.php');
    }

?>  

 
  <div class="main-content">
    <div class="wrapper">
      <h1>update Category</h1>
      <?php 
          $getcategory = $Category->showid($id) ;
            if($getcategory){
              while($row = mysqli_fetch_assoc($getcategory)){
                
              ?>

              <form method="POST">  
          <table class="tbl-admin">
          <tr>
            <td>id : </td>
            <td><input type="text" name="id" value="<?=$row['id']?>" required></td>
          </tr>
          <tr>
            <td>Title : </td>
            <td><input type="text" name="title" value="<?=$row['title']?>" required></td>
          </tr>
          <tr>
            <td>Active: </td>
            <td><input type="text" name="active" value="<?=$row['active']?>" required></td>
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
    </div>
  </div>
<?php include('p/footer.php'); ?>
