<?php include('p/menu.php') 
?>

<?php
    include_once('../admin/classes/admin.php');
    $admin = new Admin();
     
?>  
       <!-- Main Content Section Starts -->
       <form action="POST" ></form>
        <div class="main-content">
          <div class="wrapper">
          </br>
              
              <h2>Manage Admin</h2>
              </br></br>
              <a href="add-admin.php" class="btn-primary">Add Admin</a>
              </br>
              </br>
              
              </br>
             <table class="tbl-full">
                 <tr>
                    <th>Full Name</th>
                    <th>username</th>
                    <th>Actions</th>
                 </tr>
                 <?php 
                   $show = $admin->show();
                   if ($show) {
                    while ($row = mysqli_fetch_assoc($show)) {
                      $adminId = intval($row['id']); 
                      $deleteLink = 'delete_admin.php?id=' . $adminId;
                      $editLink = 'edit-admin.php?id=' . $adminId;
                       ?>
                       <tr>
                       <td><?=$row['full_name']?></td>
                       <td><?=$row['username']?></td>
                       <td>
                       <a href="<?php echo htmlspecialchars($editLink); ?>" class="btn-secondary">Update Admin</a>
                       <a href="<?php echo htmlspecialchars($deleteLink); ?>" class="btn-secondary1">Delete Admin</a>
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