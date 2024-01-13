<?php include('p/menu.php') 
?>

<?php
    include_once('../admin/classes/client.php');
    $client = new Client();
     
?>  
       <!-- Main Content Section Starts -->
       <form action="POST" ></form>
        <div class="main-content">
          <div class="wrapper">
          </br>
              
              <h2>Manage user</h2>
              </br></br>
              <a href="add-client.php" class="btn-primary">Add User</a>
              </br>
              </br>
              
              </br>
             <table class="tbl-full">
                 <tr>
                    <th>joined</th>
                    <th>username</th>
                    <th>Actions</th>
                 </tr>
                 <?php 
                   $show = $client->show();
                   if ($show) {
                    while ($row = mysqli_fetch_assoc($show)) {
                      $clientId = intval($row['id']); 
                      $deleteLink = 'delete_client.php?id=' . $clientId;
                      $editLink = 'edit-client.php?id=' . $clientId;
                       ?>
                       <tr>
                       <td><?=$row['joined']?></td>
                       <td><?=$row['username']?></td>
                       <td>
                       <a href="<?php echo htmlspecialchars($editLink); ?>" class="btn-secondary">Update Client</a>
                       <a href="<?php echo htmlspecialchars($deleteLink); ?>" class="btn-secondary1">Delete Client</a>
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