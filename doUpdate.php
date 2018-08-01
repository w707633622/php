<?php 

	header("Content-type:text/html;charset=utf-8");

	$id = $_GET["id"];
	$username = $_GET["username"];
	$sex = $_GET["sex"];
	$salary = $_GET["salary"];
	$time = $_GET["time"];
	//链接数据库和验证
	$link = mysql_connect("localhost","root","123654");
	if(!$link){
		exit("数据库连接失败!!!");
	}
	//设置字符集和选择数据库
	mysql_set_charset("utf8");
	mysql_select_db("employee");
	//准备语句和发送语句
	$sql = "update employee set username = '{$username}', sex = '{$sex}', salary = '{$salary}', time = '{$time}' where id = '{$id}' ";
	//var_dump($sql);
	$res = mysql_query($sql);
	if( $res && mysql_affected_rows($link) ){
		print("更新成功<a href='employees.php'>返回首页</a>");
	}
	//处理语句
	//关闭数据库
	mysql_close($link);

 ?>