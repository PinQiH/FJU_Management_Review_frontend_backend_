<?php
header("Content-Type:text/html; charset=utf-8");
$conn=require_once("config.php");



session_start();
$username = $_SESSION["username"];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $articlename=$_POST["articlename"]; 
    

    $type=$_POST["articletype"];
    $articletype=implode (',', $type);
    
    $articlecontent=$_POST["articlecontent"];
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
    //檢查文章是否重複
    $check="SELECT * FROM article WHERE articlename='".$articlename."'";
    
    
    
    if(mysqli_num_rows(mysqli_query($conn,$check))==0){
        $sql="INSERT INTO article (articlename, articletype, articlecontent, contributor) VALUES('".$articlename."','".$articletype."','".$articlecontent."','".$username."')";
        
        $sql2 = "CREATE TABLE `$articlename` (`replyid` int(11) AUTO_INCREMENT PRIMARY KEY, `reviewer` varchar(15) NULL, `replydecision` varchar(20) NULL, `replycontent` varchar(1000) NULL, `replypath` varchar(100) NULL, `managerreply` varchar(10) NULL, `conreplyname` VARCHAR(20) NOT NULL, `conreplytype` VARCHAR(100) NOT NULL, `conreplycontent` VARCHAR(1000) NOT NULL)";
        
        mysqli_select_db($conn, 'mamba');
        if(mysqli_query($conn, $sql2))
        {
            echo "<script>alert('文章資料表建立成功!')</script>"."<br>";
        }
        else
        {
            echo "<script>alert('文章資料表建立失敗!')</script>"."<br>";
        }
        
        if(mysqli_query($conn, $sql)){
            echo "<script>alert('新增成功!');
             window.location.href='./contributor-articlelist.php';
            </script>"; 
            exit;
        }else{
            echo "<script>alert('Error creating table!')</script>" . mysqli_error($conn);
        }
        
    }
    else{
        echo "<script>alert('該文章已有人上傳!');
            window.location.href='投稿者-新增投稿.php';</script>";
    }
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