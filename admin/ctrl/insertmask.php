<?php
//添加页面
$maskid=$_POST["maskid"];
$maskname=$_POST["maskname"];
$maskpic=$_POST["maskpic"];
$maskprice=$_POST["maskprice"];
//链接数据库
include 'conn.php';
$sql="INSERT INTO mask(mask_name, mask_pic,mask_price) VALUES ('".$maskname."','".$maskpic."',".$maskprice.")";
echo $sql;
$r=$conn->query($sql);
if($r){
    header("location:../mask.html");
}else{
    "添加失败";
}
    
?>