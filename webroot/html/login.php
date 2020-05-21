<?php
    session_start();
    include("conn.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT IFNULL((SELECT 'Y' from user where email = '".$email."' AND password = '".$password."' limit 1),'N')");
    $row=mysqli_fetch_row($result);
    echo $result;
?>