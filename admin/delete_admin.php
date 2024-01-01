<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id=$_GET['id'];

    include_once('../config/config.php');

   $connection = new Database();
   $connection->dbconnect();

   $sql = "DELETE FROM admin WHERE id='$id'";
   $result = mysqli_query( $connection->link, $sql ); 
   header('Location: manage-admin.php');
}
?>
