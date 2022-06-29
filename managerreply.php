<?php
header("Content-Type:text/html; charset=utf-8");
$conn=require_once("config.php");



if($_SERVER["REQUEST_METHOD"]=="POST"){
   $articleid = $_POST["articleid"]; $managerreply=$_POST["managerreply"]; 
    


    $sql="update `article` set managerreply = '$managerreply' where articleid = '$articleid'";
    
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('新增成功!');
         window.location.href='./manager-article.php';
        </script>"; 
        exit;
    }else{
        echo "<script>alert('Error!')</script>" . mysqli_error($conn);
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