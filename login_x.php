<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset=utf-8>
	<title>登录</title>
</head>
<body background="12.jpg" style="background-repeat:no-repeat;
background-size:100% 100%;background-attachment: fixed;color:white
"onload="setInterval('clock()',1000)">	<!--插入背景图片,且自适应-->

<div style="text-align:center;font-size:2em;color:white;">
<?php
	$link = mysqli_connect('localhost','root','','mysystem');
	if ($link) {
		if ($_POST['password']&&$_POST['id']) {
	// $result_id = mysqli_query($link,"SELECT * FROM student WHERE 学号 = $id");//错误
			echo '登陆成功';


		}else{
			echo'请输入账号密码';
		}
	}else{
		echo 'connect fail';
	}

?>
</div>

<div style="text-align:right;font-size:2em;color:white;">
<a href="http://localhost/my_project/login.html" style="color:white">back</a>
</div>

</body>
</html>
