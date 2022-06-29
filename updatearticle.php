<?php
    $articleid = $_POST["articleid"];
    $newarticlename = $_POST["articlename"];
    $type = $_POST["articletype"];
    $newarticletype = implode (',', $type);
    $newarticlecontent = $_POST["articlecontent"];
    $link = mysqli_connect("localhost", "root", "12345678", "mamba");   
    $sql = "update article set articlename = '$newarticlename', articletype = '$newarticletype', articlecontent = '$newarticlecontent' where articleid = '$articleid'";
    if (mysqli_query($link, $sql))
    {
        echo "<script>alert('修改成功!');
             window.location.href='./contributor-articlelist.php';
            </script>";
        
    }
    
?>