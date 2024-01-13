

<?php
    include_once('config/config.php');
    include_once('admin/classes/food.php');
    include_once('admin/classes/category.php');
    $category = new Category();
    $food = new Food();

    session_start();
     
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a><?php echo $_SESSION['username']?></a>
                    </li>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="admin\logout.php">Logout</a>
                    </li>
    
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php 
                   $show = $category->show();
                   if ($show) {
                    while ($row = mysqli_fetch_assoc($show)) {
                        ?>
                        <a href="#">
            <div class="box-3 float-container">
                <img src="images/burger.jpg" alt="Burger" class="img-responsive img-curve">

                 <td><?=$row['title']?></td>
 
            </div>
            </a>
                       
                        <?php
 
                   }
                  }
                 ?>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">

            
    <?php 
                   $show = $food->show();
                   if ($show) {
                    while ($row = mysqli_fetch_assoc($show)) {
                      $foodId = intval($row['id']); 
                      
                       ?>

                       <section class="food-menu">
                       <div class="container">
                        <h2 class="text-center">Food Menu</h2>

                        <div class="food-menu-box">
                           <div class="food-menu-img">
                           <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">

                           <h4><?=$row['title']?></h4>
                           <p class="food-price"><?=$row['price']?></p>
                           <p class="food-detail">
                              <?=$row['description']?>
                           </p>
                          <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
                     
                       <?php
 
                   }
                  }
                 ?>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="foods.php">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->


</body>
</html>