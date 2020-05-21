<?php
    session_start();
    include("conn.php");
    
    $sql="select * from user where email='$_POST[email]'and password='$_POST[password]'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    if ($row==true) {
        $url = "addPost.html?email="+$_POST['email'];
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>"; 
    }else{
        $url = "login.html";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>"; 
    }
    
?>