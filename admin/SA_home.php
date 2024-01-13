<?php include('p/menu.php') ;
 include_once('../config/config.php');

 $conn = new Database();
 $conn->dbconnect();
?>  


<?php
    include_once('../admin/classes/admin.php');
    $admin = new Admin();
    include_once('../admin/classes/client.php');
    $client = new Client();
    include_once('../admin/classes/category.php');
    $category = new Category();
    include_once('../admin/classes/food.php');
    $food = new Food();
?>  
        <div class="main-content">
          <div class="wrapper">

              <h2>DASHBOARD</h2>
            <div class="col-4 text-center">
               
            <?php 
              
              $sql = $admin->show();
          
              $count = mysqli_num_rows($sql);
            ?>  
              <h1><?php echo $count ?></h1>
                <br/>
                 Admin
            </div>
            <div class="col-4 text-center">
               
            <?php 
              
              $sql = $client->show();
          
              $count = mysqli_num_rows($sql);
            ?>  
              <h1><?php echo $count ?></h1>
                <br/>
                 Client
            </div>
            <div class="col-4 text-center">
               
            <?php 
              
              $sql = $category->show();
          
              $count = mysqli_num_rows($sql);
            ?>  
              <h1><?php echo $count ?></h1>
                <br/>
                 Category
            </div>
            <div class="col-4 text-center">
               
               <?php 
                 
                 $sql = $food->show();
             
                 $count = mysqli_num_rows($sql);
               ?>  
                 <h1><?php echo $count ?></h1>
                   <br/>
                    Food
               </div>

            <div class="clearfix"></div>
          </div> 
        </div>
       <!-- Main Content Setion Ends -->
       </form>
       
       <?php include('p/footer.php') ?>   