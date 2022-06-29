<?php
//處理註冊
header("Content-Type:text/html; charset=utf-8");
$conn=require_once("config.php");


$sql="CREATE TABLE user(
userid int(200),
username varchar(10),
auth varchar(20),
profession varchar(100),
email varchar(65),
phone varchar(20),
password varchar(20)
)";


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"]; 
    
    $auth=$_POST["auth"];

    $profession=$_POST["profession"];
    $userprofession=implode (',', $profession);
    
    $email=$_POST["email"];
    
    $phone=$_POST["phone"];
    
    $password=$_POST["password"];
    
    //檢查帳號是否重複
    $check="SELECT * FROM user WHERE email='".$email."'";
    
    
    
    if(mysqli_num_rows(mysqli_query($conn,$check))==0){
        $sql="INSERT INTO user (username, auth, profession, email, phone, password)
            VALUES('".$username."','".$auth."','".$userprofession."','".$email."','".$phone."','".$password."')";
        
        if(mysqli_query($conn, $sql)){
            echo "<script>alert('註冊成功!');
             window.location.href='./login/loginindex.php';
            </script>";
        }else{
            echo "<script>alert('Error!');</script>";  mysqli_error($conn);
        }
    }
    else{
        echo "<script>alert('該帳號已有人使用!');
             window.location.href='./register.html';
            </script>";
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