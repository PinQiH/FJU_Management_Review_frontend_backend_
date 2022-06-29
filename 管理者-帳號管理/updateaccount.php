<?php
    $userid = $_POST["userid"];
    $newusername = $_POST["username"];
    $newauth = $_POST["auth"];
    $profession = $_POST["profession"];
    $newprofession = implode (',', $profession);
    $newemail = $_POST["email"];
    $newphone = $_POST["phone"];
    $newpassword = $_POST["password"];
    $link = mysqli_connect("localhost", "root", "k79130cassie", "mamba");   
    $sql = "update user set username = '$newusername', auth = '$newauth', profession = '$newprofession', email = '$newemail', phone = '$newphone', password = '$newpassword'  where userid = '$userid'";
    if (mysqli_query($link, $sql))
    {
        echo "<script>alert('修改成功!');
         window.location.href='./accountmanage.php';
        </script>"
        
    }
    
?>