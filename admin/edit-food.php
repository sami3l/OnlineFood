
<?php include_once('p/menu.php') ;

?>


<?php
    include_once('../admin/classes/food.php');
    $food = new Food();
    
    if(isset($_GET["id"])){

      $id = $_GET["id"];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $food->update($_POST , $_FILES , $id);
        header('Location: manage-food.php');
    }

?>  

 
  <div class="main-content">
    <div class="wrapper">
      <h1>update Food</h1>
      <?php 
          $getfood = $food->showid($id) ;
            if($getfood){
              while($row = mysqli_fetch_assoc($getfood)){
                
              ?>

              <form method="POST">  
          <table class="tbl-admin">
          <tr>
            <td>Title : </td>
            <td><input type="text" name="title" value="<?=$row['title']?>" required></td>
          </tr>
          <tr>
            <td>Description : </td>
            <td><input type="text" name="description" value="<?=$row['description']?>" required></td>
          </tr>
          <tr>
            <td>Price: </td>
            <td><input type="text" name="price" value="<?=$row['price']?>" required></td>
          </tr>
          <tr>
            <td>Category_id: </td>
            <td><input type="text" name="category_id" value="<?=$row['category_id']?>" required></td>
          </tr>
          <tr>
            <td>Active: </td>
            <td><input type="text" name="active" value="<?=$row['active']?>" required></td>
          </tr>

          <tr>
           <td><input type="submit" value="Edit Food" class="btn-secondary"></td>
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
