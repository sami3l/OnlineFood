<?php include_once('p/menu.php'); ?>

<?php
include_once('../admin/classes/food.php');
include_once('../admin/classes/category.php');
$food = new Food();
$category = new Category();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $food->Addfood($_POST);
    header('Location: manage-food.php');
}
?>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Food</h1>
        </br>
        <form method="POST">
            <table class="tbl-admin">
                <tr>
                    <td>Title:</td>
                    <td><input type="text" name="title" required></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><input type="text" name="description" required></td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td><input type="text" name="price" required></td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td>
                        <select name="category_id" required>
                            <?php
                            $categories = $category->getCategories();
                            foreach ($categories as $cat) {
                                echo "<option value='{$cat['id']}'>{$cat['title']}</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td><input type="text" name="active" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Add Food" class="btn-secondary"></td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('p/footer.php'); ?>
