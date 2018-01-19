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
   <form action="ctrl/insertuser.php" role="form" method="post">
    <input type="hidden" class="form-control" name="userid" value=""/>
   <div class="form-group has-success has-feedback">
      <label class="control-label" for="username">用户名：</label>
      <input type="text" class="form-control" name="username" value=""/>
      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
   </div>
   <div class="form-group has-warning has-feedback">
      <label class="control-label" for="scdetail">用户密码：</label>
      <input type="text" class="form-control" name="maskpic" value=""/>
      <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
   </div> 
    <input type="submit" class="btn btn-success" value="添加">
   </form>
</body>
</html>
