<?php
$maskid=$_GET['maskid'];
//链接数据库
include 'conn.php';
$sql="delete from mask where mask_id=".$maskid;
$r=$conn->query($sql);
if($r){
    header("location:../mask.html");
}else{
    echo  "删除失败！这个小类在产品表里有外键关系！";
}
?>