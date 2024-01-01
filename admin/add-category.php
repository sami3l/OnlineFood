
<?php include_once('p/menu.php') ;

?>


<?php
    include_once('../admin/classes/category.php');
    $Category = new Category();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Category->ACategory($_POST);
        header('Location: manage-category.php');
    }

?>  

 
  <div class="main-content">
    <div class="wrapper">
      <h1>Add Category</h1>
      </br>
         <form  method="POST">  
        <table class="tbl-admin">
          <tr>
            <td>title :  </td>
            <td><input type="text" name="title" placeholder="Enter the title" required></td>
          </tr>
          <tr>
            <td>active : </td>
            <td><input type="text" name="active" placeholder="yes or no" required></td>
          </tr>
          
          <tr>
           <td><input type="submit" value="add category" class="btn-secondary"></td>
          </tr>
        </table>
       
          
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        </form>
    </div>
  </div>
<?php include('p/footer.php'); ?>
