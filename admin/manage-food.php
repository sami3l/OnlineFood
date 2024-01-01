<?php include('p/menu.php') ?>



<?php
    include_once('../admin/classes/food.php');
    $food = new Food();
     
?>  

       <!-- Main Content Section Starts -->
        <div class="main-content">
          <div class="wrapper">
              <h2>Manage food</h2>
              </br>
              </br></br>
              <a href="add-food.php" class="btn-primary">Add food</a>
              </br>
              </br>
              
              </br>
              <table class="tbl-full">
                 <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category_id</th>
                    <th>Active</th>
                    <th>Action</th>
                    
                    
                 </tr>
                 <?php 
                   $show = $food->show();
                   if ($show) {
                    while ($row = mysqli_fetch_assoc($show)) {
                      $foodId = intval($row['id']); 
                      $deleteLink = 'delete_food.php?id=' . $foodId;
                      $editLink = 'edit-food.php?id=' . $foodId;
                       ?>
                       <tr>
                        <td><?=$row['id']?></td>
                       <td><?=$row['title']?></td>
                       <td><?=$row['description']?></td>
                       <td><?=$row['price']?></td>
                       <td><?=$row['category_id']?></td>
                       <td><?=$row['active']?></td>
                       <td>
                       <a href="<?php echo htmlspecialchars($editLink); ?>"  class="btn-secondary">Update Category</a></br></br>
                       <a href="<?php echo htmlspecialchars($deleteLink); ?>" class="btn-secondary1">Delete Category</a>
                       </td>
                       </tr> 
                       <?php
 
                   }
                  }
                 ?>

             </table>
            <div class="clearfix"></div>
          </div> 
        </div>
       <!-- Main Content Setion Ends -->
       
<?php include('p/footer.php') ?>