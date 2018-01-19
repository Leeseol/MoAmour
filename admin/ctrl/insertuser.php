<?php
//添加页面
$userid=$_POST["user"];
$username=$_POST["username"];
$pawd=$_POST["pawd"];
//链接数据库
include 'conn.php';
$sql="INSERT INTO users(user_name, user_pwd) VALUES ('".$username."','".$pawd."')";
echo $sql;
$r=$conn->query($sql);
if($r){
    header("location:../user.html");
}else{
    "添加失败";
}
    
?>