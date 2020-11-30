<?php

$username=$_POST['username'];
$pwd=md5($_POST['pwd']);

$phonenum=$_POST['phonenum'];
$email=$_POST['email'];
$link=mysqli_connect('localhost','root','admin','p2p','3306');
$sql = "INSERT INTO USER (username,pwd,phonenum,email) VALUES ('$username','$pwd', '$phonenum','$email')";
$res=mysqli_query($link,$sql);
if ($res) {
    $result=["isSuccess"=>true,"massage"=>"注册成功"];
    echo json_encode($result);
} else {
    $result=["isSuccess"=>false,"massage"=>"注册失败"];
    echo json_encode($result);
};
mysqli_free_result($res);
mysqli_close($link);

?>