<?php include('p/menu.php') ?>


<?php
    include_once('../admin/classes/category.php');
    $category = new Category();
     
?>  

       <!-- Main Content Section Starts -->
        <div class="main-content">
          <div class="wrapper">
          </br>
              
              <h2>Manage Category</h2>
               </br></br></br>
              <a href="add-category.php" class="btn-primary">Add Category</a>
              </br>
              </br>
              
              </br>
             <table class="tbl-full">
                 <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Active</th>
                    <th>Actions</th>
                    
                 </tr>
                 <?php 
                   $show = $category->show();
                   if ($show) {
                    while ($row = mysqli_fetch_assoc($show)) {
                      $categoryId = intval($row['id']); 
                      $deleteLink = 'delete_category.php?id=' . $categoryId;
                      $editLink = 'edit-category.php?id=' . $categoryId;
                       ?>
                       <tr>
                        <td><?=$row['id']?></td>
                       <td><?=$row['title']?></td>
                       <td><?=$row['active']?></td>
                       <td>
                       <a href="<?php echo htmlspecialchars($editLink); ?>"  class="btn-secondary">Update Category</a>
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