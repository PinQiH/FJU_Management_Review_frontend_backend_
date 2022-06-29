<?php
//處理登入
// Include config file
$conn=require_once("../config.php");



// Define variables and initialize with empty values
$email=mysqli_real_escape_string($conn, $_POST["email"]);
$password=mysqli_real_escape_string($conn, $_POST["password"]);

//增加hash可以提高安全性
$password_hash=password_hash($password,PASSWORD_DEFAULT);

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $sql = "select * from user where email = ? and password = ?";
    //echo $sql;
    
    $stmt = $link->prepare($sql);
    $stmt->bind_param('ss',$email,$password);
    $stmt->execute();
    $stmt->bind_result($userid,$username,$auth,$profession,$email,$phone,$password);

    
    if($stmt->fetch())
    {               
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["auth"] = $auth;
        $_SESSION["email"] = $email;
        //echo $_SESSION["username"]."<br>".$_SESSION["auth"]."<br>".$_SESSION["email"];
        
        if ($_SESSION["auth"] == "投稿者")
        {
            header("location:../contributor.php");
        }
        else if ($_SESSION["auth"] == "審稿者")
        {
            header("location:../reviewer.php");
        }
        else if ($_SESSION["auth"] == "管理者")
        {
            header("location:../manager.php");
        }
        else
        {
            echo "<script>alert('Something wrong!');
             window.location.href='../login/loginindex.php';
            </script>";
        }
            
    }
    
}
else
{
    function_alert("Something wrong"); 
}

    // Close connection
    mysqli_close($link);

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='loginindex.php';
    </script>"; 
    return false;
} 

?>
<?php

 if(!empty($remember)){    //如果選擇記住密碼，紀錄登入狀態把email和密碼放到cookie裡面 
 setcookie("email", $email, time()+3600*24*365); 
 setcookie("password", $password, time()+3600*24*365); 
 }
else{                    //如果取消選擇記住密碼，則設置cookie過期
    setcookie("email", null, time()-1); 
    setcookie("password", null, time()-1);     
 }


?>
