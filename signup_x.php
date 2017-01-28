<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset=utf-8>
	<title>登录</title>
</head>
<body background="12.jpg" style="background-repeat:no-repeat;
background-size:100% 100%;background-attachment: fixed;color:white
">	<!--插入背景图片,且自适应-->
<div style="text-align:center;font-size:2em">
<?php
	$sure = $_POST['name']&&$_POST['sex']&&$_POST['age']&&
	$_POST['id']&&$_POST['phone']&&$_POST['password'];
	$link = mysql_connect('localhost','root','');
	if ($sure) {
		$file = $_FILES['headimage'];
		$fileName = $file['name'];
		move_uploaded_file($file['tmp_name'],$fileName);
		mysql_select_db('mysystem');
		$id = $_POST['id'];
		$sec = "SELECT * FROM student WHERE id = '$id'";
		mysql_query("set names utf8");
		$result = mysql_query($sec); 	//执行数据库查询
		$num = mysql_num_rows($result);	//mysql对应表单行数
		if (!$num) {
			$row = mysql_fetch_array($result);
			$name = $_POST['name'];
			$password = $_POST['password'];
			$sex = $_POST['sex'];
			$age = $_POST['age'];
			$id = $_POST['id'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			mysql_query("INSERT INTO  student  
			(`name`, `sex`, `age`, `id`, `phone`, `password`)
			 VALUES ('$name', '$sex', '$age', '$id', '$phone', '$password')");
			// $sql="INSERT INTO userinfo(username,passwords) VALUES('$addname,$addpass')";
			// $ins=mysql_query("$sql",$link);
			 echo '注册成功！';
		}else{
			echo '该账号已注册，请核对后再进行操作';
		}
	}else{
		echo '请完善所有信息';
	}
?></div>

<div style="text-align:right;font-size:2em;color:white;">
<a href="http://localhost/my_project/signup.html" style="color:white">back</a>
</div>
</body>
</html>