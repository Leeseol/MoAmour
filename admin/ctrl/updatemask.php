<?php 
//修改页面
$maskid=$_POST["maskid"];
$maskname=$_POST["maskname"];
$maskpic=$_POST["maskpic"];
$maskprice=$_POST["maskprice"];
//链接数据库
include 'conn.php';
$sql="update mask set mask_name='".$maskname."',mask_pic='".$maskpic."',mask_price=".$maskprice." where mask_id=".$maskid;
echo $sql;
$r=$conn->query($sql);
if($r){
    header("location:../mask.html");
}else{
    echo "修改失败！";
}
?>