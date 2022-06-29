<?php
    $email = $_POST["email"];
    $password = $_POST["password"];
    $link = mysqli_connect("localhost", "root", "12345678", "mamba");   
    $sql = "UPDATE `user` SET `password`='$password' where `email`='$email'";
    if (mysqli_query($link, $sql))
    {
        echo "<script>alert('修改成功!');
             window.location.href='../login/loginindex.php';
            </script>"; 
    }
    else
    {
        echo "<script>alert('Something wrong!');
             window.location.href='../login/loginindex.php';
            </script>"; 
    }
?>