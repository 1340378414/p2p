<?php
session_start();
if(isset($_SESSION['id'])) {  
    $result=["isLogin"=>true,'username'=>$_SESSION['username']];
    echo json_encode($result);
} else{
    $result=["isLogin"=>false];
    echo json_encode($result);
}
?>