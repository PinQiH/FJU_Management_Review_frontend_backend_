<?php 
//處理登出
session_start(); 
$_SESSION = array(); 
session_destroy(); 
header('location:../index.php'); 

?>