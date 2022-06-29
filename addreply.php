<?php
header("Content-Type:text/html; charset=utf-8");
$conn=require_once("config.php");
session_start();
$username = $_SESSION["username"];



if($_SERVER["REQUEST_METHOD"]=="POST"){
    $articlename = $_POST["articlename"];
    $replydecision=$_POST["replydecision"]; 
    

    $replycontent=$_POST["replycontent"];
    
    /*
    $_FILES["articlepath"]
    $_FILES["articlepath"]["name"]
    $_FILES["articlepath"]["type"]
    $_FILES["articlepath"]["size"]
    $_FILES["articlepath"]["tmp_name"]
    $_FILES["articlepath"]["error"]
    if ($_FILES["articlepath"]["error"] > 0){
        echo "Error: " . $_FILES["articlepath"]["error"];
    }else{
        echo "檔案名稱: " . $_FILES["articlepath"]["name"]."<br/>";
        echo "檔案類型: " . $_FILES["articlepath"]["type"]."<br/>";
        echo "檔案大小: " . ($_FILES["articlepath"]["size"] / 1024)." Kb<br />";
        echo "暫存名稱: " . $_FILES["articlepath"]["tmp_name"];
        if (file_exists("uploadfile/" . $_FILES["articlepath"]["name"])){
            echo "檔案已經存在，請勿重覆上傳相同檔案";
        }else{
            move_uploaded_file($_FILES["articlepath"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
        }
    }
    $target_path="uploadfile/";
    $articlepath.=$FILES["articlepath"]["name"]
    if (move_uploaded_file($_FILES["articlepath"]["tmp_name"], iconv("UTF-8", "big5", $target_path)))
    {
        echo "上傳成功!";
    }
    else
    {
        echo "上傳失敗"
    }
    
    */
    
        $sql="INSERT INTO `$articlename` (reviewer, replydecision, replycontent) VALUES('".$username."','".$replydecision."','".$replycontent."')";
        
        
        
        if(mysqli_query($conn, $sql)){
            echo "<script>alert('回覆成功!');
             window.location.href='./審稿者-線上審稿.php';
            </script>"; 
            exit;
        }else{
            echo "<script>alert('Something wrong!');
            </script>";
            echo mysqli_error($conn);
        }//window.location.href='./審稿者-線上審稿.php';
    
}


mysqli_close($conn);

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='index.php';
    </script>"; 
    
    return false;
} 
?>