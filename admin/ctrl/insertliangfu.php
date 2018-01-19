<?php
//添加页面
$lfid=$_POST["lfid"];
$lfname=$_POST["lfname"];
$lfpic=$_POST["lfpic"];
$lfprice=$_POST["lfprice"];
//链接数据库
include 'conn.php';
$sql="INSERT INTO liangfu(lf_name, lf_pic,lf_price) VALUES ('".$lfname."','".$lfpic."',".$lfprice.")";
echo $sql;
$r=$conn->query($sql);
if($r){
    header("location:../liangfu.html");
}else{
    "添加失败";
}
    
?>