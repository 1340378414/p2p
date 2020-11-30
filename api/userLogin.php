<?php

$username=$_POST['username'];
$pwd=md5($_POST['pwd']);
$link=mysqli_connect('localhost','root','admin','p2p','3306');
$sql = "select * from user where username='$username' and pwd='$pwd'";
$res=mysqli_query($link,$sql);
$rs=mysqli_fetch_assoc($res); 
if ($rs) {
    $result=["isSuccess"=>true,"massage"=>"登陆成功"];
    echo json_encode($result);
} else {
    $result=["isSuccess"=>false,"massage"=>"登录失败"];
    echo json_encode($result);
};
mysqli_free_result($res);
mysqli_close($link);
?>