<?php 
    $id = $_GET['id'];
    $link = mysqli_connect("localhost", "root", "12345678", "mamba");
    
    $sql="DELETE FROM user where userid = '$id'";
    $result = mysqli_query($link,$sql);
        
    header('location:./accountmanage.php');
    echo "刪除成功";
?>
