<?php
//添加页面
$bdid=$_POST["bdid"];
$bdname=$_POST["bdname"];
$bdpic=$_POST["bdpic"];
$bdsize1=$_POST["bdsize1"];
$bdsize2=$_POST["bdsize2"];
//链接数据库
include 'conn.php';
$sql="INSERT INTO bangdan(bd_name, bd_pic,bd_size1,bd_size2) VALUES ('".$bdname."','".$bdpic."',".$bdsize1.",".$bdsize2.")";
echo $sql;
$r=$conn->query($sql);
if($r){
    header("location:../top.html");
}else{
    "添加失败";
}
    
?>