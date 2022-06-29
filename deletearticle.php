<?php 
    header("Content-Type:text/html; charset=utf-8");
    $articlename = $_GET['articlename'];
    $link = mysqli_connect("localhost", "root", "12345678", "mamba");
    
    $sql="DELETE FROM article where articlename = '$articlename'";
    $result = mysqli_query($link,$sql);
    
    $sql1="DROP TABLE `$articlename`";
    $resultt = mysqli_query($link,$sql1);

    echo "<script>alert('刪除成功!');
             window.location.href='./manager-article.php';
            </script>";
?>
