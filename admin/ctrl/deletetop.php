<?php
$bdid=$_GET['bdid'];
//链接数据库
include 'conn.php';
$sql="delete from bangdan where bd_id=".$bdid;
$r=$conn->query($sql);
if($r){
    header("location:../top.html");
}else{
    echo  "删除失败！这个小类在产品表里有外键关系！";
}
?>