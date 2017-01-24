<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset=utf-8>
	<title>登录</title>
</head>
<body background="12.jpg" style="background-repeat:no-repeat;
background-size:100% 100%;background-attachment: fixed;color:white
"onload="setInterval('clock()',1000)">	<!--插入背景图片,且自适应-->
<div style="text-align:center;font-size:2em">
<?php
	$sure = $_POST['name']&&$_POST['sex']&&$_POST['age']&&
	$_POST['id']&&$_POST['phone']&&$_POST['password'];
	if ($sure) {
		$file = $_FILES['headimage'];
		$fileName = $file['name'];
		move_uploaded_file($file['tmp_name'],$fileName);
		echo "<img src='$fileName'>".'<br>';
		echo '姓名:'.$_POST['name'].'<br>';
		echo '性别:'.$_POST['sex'].'<br>';
		echo '年龄:'.$_POST['age'].'<br>';
		echo '学号:'.$_POST['id'].'<br>';
		echo '手机号码:'.$_POST['phone'].'<br>';
		echo '密码:'.$_POST['password'].'<br>';
	}else{
		echo '请完善所有信息';
	}
?></div>

<div style="text-align:right;font-size:2em;color:white;">
<a href="http://localhost/my_project/signup.html" style="color:white">back</a>
</div>
</body>
</html>
