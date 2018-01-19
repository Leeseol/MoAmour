<?php 
//修改页面
$bdid=$_POST["bdid"];
$bdname=$_POST["bdname"];
$bdpic=$_POST["bdpic"];
$bdsize1=$_POST["bdsize1"];
$bdsize2=$_POST["bdsize2"];
//链接数据库
include 'conn.php';
$sql="update bangdan set bd_name='".$bdname."',bd_pic='".$bdpic."',bd_size1='".$bdsize1."',bd_size2='".$bdsize2."' where bd_id=".$bdid;
echo $sql;
$r=$conn->query($sql);
if($r){
    header("location:../top.html");
}else{
    echo "修改失败！";
}
?>