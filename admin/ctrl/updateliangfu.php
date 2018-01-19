<?php 
//修改页面
$lfid=$_POST["lfid"];
$lfname=$_POST["lfname"];
$lfpic=$_POST["lfpic"];
$lfprice=$_POST["lfprice"];
//链接数据库
include 'conn.php';
$sql="update liangfu set lf_name='".$lfname."',lf_pic='".$lfpic."',lf_price=".$lfprice." where lf_id=".$lfid;
echo $sql;
$r=$conn->query($sql);
if($r){
    header("location:../liangfu.html");
}else{
    echo "修改失败！";
}
?>