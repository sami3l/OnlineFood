<?php

include('p/menu.php');
include_once('../admin/classes/admin.php');
$admin = new Admin();


if (isset($_POST['search'])) {
    $searchName = $_POST['search'];
    $show = $admin->searchByName($searchName);
} else {
    $show = $admin->show();
}
?>
<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <br>
        <h2>Manage Admin</h2>
        <br><br>
        <form method="POST" action="">
            <input type="text" name="search" placeholder="Search by name">
            <button type="submit" class="btn-primary">Search</button>
        </form>
        <br><br>
        <a href="add-admin.php" class="btn-primary">Add Admin</a>
        <br><br>
        <table class="tbl-full">
            <tr>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
            <?php
            if ($show) {
                while ($row = mysqli_fetch_assoc($show)) {
                    $adminId = intval($row['id']);
                    $deleteLink = 'delete_admin.php?id=' . $adminId;
                    $editLink = 'edit-admin.php?id=' . $adminId;
            ?>
                    <tr>
                        <td><?= $row['full_name'] ?></td>
                        <td><?= $row['username'] ?></td>
                        <td>
                            <a href="<?= htmlspecialchars($editLink); ?>" class="btn-secondary">Update Admin</a>
                            <a href="<?= htmlspecialchars($deleteLink); ?>" class="btn-secondary1">Delete Admin</a>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo '<tr><td colspan="3">No results found.</td></tr>';
            }
            ?>
        </table>

        <div class="clearfix"></div>
    </div>
</div>
<!-- Main Content Section Ends -->

<?php include('p/footer.php') ?>
