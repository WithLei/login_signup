<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset=utf-8>
	<title>登录</title>
</head>
<body background="12.jpg" style="background-repeat:no-repeat;
background-size:100% 100%;background-attachment: fixed;color:white
">	<!--插入背景图片,且自适应-->

<div style="text-align:center;font-size:2em;color:white;">
<?php
	$link = mysql_connect('localhost','root','');
	if ($link) {
		if ($_POST['password']&&$_POST['id']) {
			$id = $_POST['id'];
		mysql_select_db('mysystem');
		$sec = "SELECT * FROM student WHERE id = '$id'";
		mysql_query("set names utf8");
		$result = mysql_query($sec); 	//执行数据库查询
		$num = mysql_num_rows($result);	//mysql对应表单行数
		if ($num) {	//用户存在
			$row = mysql_fetch_array($result);
			if ($_POST['password']==$row['password']) {
				echo '登陆成功';
			}
		}else{
			echo '请核对账户名及密码';
		}
		}else{
			echo'请输入账号密码';
		}
	}else{
		echo 'sql连接失败';
	}

?>
</div>

<div style="text-align:right;font-size:2em;color:white;">
<a href="http://localhost/my_project/login.html" style="color:white">back</a>
</div>

</body>
</html>