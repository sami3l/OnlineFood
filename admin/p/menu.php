<?php include('../config/config.php') ;
session_start();
?>

<html>
 <head>
      <title>Food Order Home Page</title>
      <link rel="stylesheet" href="../css/admin.css">
 </head>

 <body>
     <!-- Menu Section starts -->
          <div class="menu">
            <div class="wrapper">
              <ul>
                <li><a><?php echo $_SESSION['username']?></a></li> 
                <li><a href="SA_home.php">Home</a></li>
                <li><a href="manage-admin.php">admin</a></li>
                <li><a href="manage-user.php">users</a></li>
                <li><a href="manage-category.php">category</a></li>
                <li><a href="manage-food.php">food</a></li>
              </ul>
              <ul>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
      <!-- Menu Section Ends -->