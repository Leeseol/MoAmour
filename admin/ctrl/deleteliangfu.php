<?php
$lfid=$_GET['lfid'];
//链接数据库
include 'conn.php';
$sql="delete from liangfu where lf_id=".$lfid;
$r=$conn->query($sql);
if($r){
    header("location:../liangfu.html");
}else{
    echo  "删除失败！这个小类在产品表里有外键关系！";
}
?>