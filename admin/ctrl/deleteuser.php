<?php
$userid=$_GET['userid'];
//链接数据库
include 'conn.php';
$sql="delete from users where user_id=".$userid;
$r=$conn->query($sql);
if($r){
    header("location:../user.html");
}else{
    echo  "删除失败！这个小类在产品表里有外键关系！";
}
?>