<html>
    <head>
    	<meta charset="utf-8" />
        <title></title>
    </head>
    <body>
   <?php
   session_start();
$uname=$_POST['username'];
$pwd=$_POST['password'];
echo "用户名：".$uname.'<br>';
echo "密码：".$pwd.'<br>';

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "moamour";

// 创建连接
$flag=0;
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT * FROM users";//在数据库里执行成功
mysqli_query($conn, "set names utf8");
$result = $conn->query($sql);//query($sql)带返回值得执行
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
    	if($uname==$row["user_name"]){
    		$flag=1;//用户名正确
    		if($pwd==$row["user_pwd"]){
    			$flag=2;//用户名密码都正确
    			$_SESSION['uname']=$row["user_name"];
    			$_SESSION['uid']=$row["user_id"];
    		}
    	}
    }
} else {
    echo "0 结果";
}
switch($flag){
	case 0:echo '用户名错误';break;
	case 1:echo '密码错误';break;
	case 2:echo '<script language="JavaScript">window.location.href="index.php"</script>';
}
?>  
    </body>
</html>
