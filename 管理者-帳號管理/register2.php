<?php
//處理adduser
header("Content-Type:text/html; charset=utf-8");
$conn=require_once("../config.php");


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"]; 
    
    $auth=$_POST["auth"];

    $profession=$_POST["profession"];
    $userprofession=implode (',', $profession);
    
    $email=$_POST["email"];
    
    $password=$_POST["password"];
    
    //檢查帳號是否重複
    $check="SELECT * FROM user WHERE email='".$email."'";
    
    
    
    if(mysqli_num_rows(mysqli_query($conn,$check))==0){
        $sql="INSERT INTO user (username, auth, profession, email, password)
            VALUES('".$username."','".$auth."','".$userprofession."','".$email."','".$password."')";
        
        if(mysqli_query($conn, $sql)){
            echo "新增成功!3秒後將自動跳轉頁面<br>";
            echo "<a href='./accountmanage.php'>未成功跳轉頁面請點擊此</a>";
            header("refresh:3;url='./accountmanage.php'");
            exit;
        }else{
            echo "Error creating table: " . mysqli_error($conn);
        }
    }
    else{
        echo "該帳號已有人使用!<br>3秒後將自動跳轉頁面<br>";
        echo "<a href='adduser.php'>未成功跳轉頁面請點擊此</a>";
        header("refresh:3;url=adduser.php");
        exit;
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