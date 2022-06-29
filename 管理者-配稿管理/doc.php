    <?php
header("Content-Type:text/html; charset=utf-8");
$conn=require_once("../config.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $articlename=$_POST["articlename"];
    $reviewer1=$_POST["reviewer1"]; 
    
    $reviewer2=$_POST["reviewer2"];
    $sql1="INSERT INTO `$articlename` (`reviewer`) VALUES('".$reviewer1."')";
    $sql2="INSERT INTO `$articlename` (`reviewer`) VALUES('".$reviewer2."')";
    
    $sql3="update `article` set reviewer1 = '$reviewer1', reviewer2 = '$reviewer2' where articlename = '$articlename'";
    
    if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)&&mysqli_query($conn, $sql3)){
        echo "<script>alert('配稿成功!');
        window.location.href='./配稿管理.php';
        </script>";
    }
    else{
        echo "<script>alert('Something wrong!');
        window.location.href='./配稿管理.php';
        </script>";
        echo mysqli_error($conn);
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