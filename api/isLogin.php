<?php
session_start();
if(!isset($_SESSION['id'])) {  
echo "<script type='text/javascript'>alert('请登录');location.href='../login.php'</script>";
} 
?>

