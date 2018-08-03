<?php 
	//字符编码
	header("Content-type:text/html;charset=utf-8");

	$id = $_GET['id'];
	$username = $_GET['username'];
	$sex = $_GET['sex'];
	$salary = $_GET['salary'];
	$time = $_GET['time'];
	//var_dump($id,$username,$sex,$salary,$time);

	//链接数据库和判断链接成功
	$link = mysql_connect("localhost","root","123654");
	if(!$link){
		exit("数据库链接失败!!!");
	}
	//设置字符集和选择数据库
	mysql_set_charset("utf8");
	mysql_select_db("employee");
	//准备语句和发送
	$sql = "insert into employee(id, username, sex, salary, time) value($id, '$username', '$sex', $salary, '$time')";
	//var_dump($sql);
	$res = mysql_query($sql);
	if($res && mysql_affected_rows($link)){
		print("数据库添加成功!<a href='employees.php'>返回首页</a>");
	}else{
		print("添加失败!!<a href='employees.php'>返回首页</a>");
	}
	//
	//关闭数据库
	mysql_close($link);
 ?>