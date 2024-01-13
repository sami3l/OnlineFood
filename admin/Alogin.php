<?php
  session_start();

    $username =  $_POST['mail'];
    $password =  $_POST['pass'];

    include_once('../config/config.php');

    $conn = new Database();
    $conn->dbconnect();

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";

    $result = $conn->insert($sql);

    if(!$row = $result->fetch_assoc()) {
      echo "incorrect username or password";
    }else {

        $_SESSION['username'] = $username;
        header("Location: SA_home.php");
      }

    

?>
