<?php 
//链接数据库
include 'ctrl/conn.php';
$sql="select mask_id,mask_name,mask_pic,mask_price from mask where mask_id=".$_GET['maskid'];
$rs = $conn->query($sql);
$att= $rs->fetch_row();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>修改面膜商品</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.4-dist/css/bootstrap-theme.min.css" />
    <script src="../js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
   <form action="ctrl/updatemask.php" role="form" method="post">
    <input type="hidden" class="form-control" name="maskid" value="<?php echo $att[0];?>"/>
   <div class="form-group has-success has-feedback">
      <label class="control-label" for="scname">面膜名称：</label>
      <input type="text" class="form-control" name="maskname" value="<?php echo $att[1];?>"/>
      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
   </div>
   <div class="form-group has-warning has-feedback">
      <label class="control-label" for="scdetail">面膜图片：</label>
      <input type="text" class="form-control" name="maskpic" value="<?php echo $att[2];?>"/>
      <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
   </div> 
   <div class="form-group has-success has-feedback">
      <label class="control-label" for="scname">面膜价格：</label>
      <input type="text" class="form-control" name="maskprice" value="<?php echo $att[3];?>"/>
      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
   </div>     
    <input type="submit" class="btn btn-success" value="修改">
    <input type="reset" class="btn btn-warning" value="取消" />
   </form>
</body>
</html>
