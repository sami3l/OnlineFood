<?php
include_once('p/menu.php');

include_once('../admin/classes/food.php');
include_once('../admin/classes/category.php');
$food = new Food();
$category = new Category();

// Check if the 'id' parameter is set in the URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update food based on the submitted form data
    $food->update($_POST, $_FILES, $id);
    // Redirect to the food management page after the update
    header('Location: manage-food.php');
}

?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Food</h1>

        <?php
        $getfood = $food->showid($id);
        if ($getfood) {
            while ($row = mysqli_fetch_assoc($getfood)) {
                ?>
                <form method="POST">
                    <table class="tbl-admin">
                        <tr>
                            <td>Title:</td>
                            <td><input type="text" name="title" value="<?= $row['title'] ?>" required></td>
                        </tr>
                        <tr>
                            <td>Description:</td>
                            <td><input type="text" name="description" value="<?= $row['description'] ?>" required></td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td><input type="text" name="price" value="<?= $row['price'] ?>" required></td>
                        </tr>
                        <tr>
                            <td>Category:</td>
                            <td>
                                <select name="category_id" required>
                                    <?php
                                    $categories = $category->getCategories();
                                    foreach ($categories as $cat) :
                                        $selected = ($cat['id'] == $row['category_id']) ? 'selected' : '';
                                    ?>
                                        <option value="<?= $cat['id'] ?>" <?= $selected ?>><?= $cat['title'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Active:</td>
                            <td><input type="text" name="active" value="<?= $row['active'] ?>" required></td>
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
