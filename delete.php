<?php 
	//头,设置字符编码格式
	header("Content-type:text/html;chatset=utf-8");
	print("删除页");

	$id = $_GET["id"];
	//连接数据库和验证链接
	$link = mysql_connect("localhost","root","123654");
	if(!$link){
		exit("数据库链接失败!!");
	}
	//设置字符集和选择数据库
	mysql_set_charset("utf8");
	mysql_select_db("employee");
	//准备sql语句和发送
	$sql = "delete from employee where id = {$id}";
	//var_dump($sql);
	$res = mysql_query($sql);
	//var_dump($res);
	//确保有删除语句,并且删除至少一条
	if($res && mysql_affected_rows($link)){
		print("删除成功<a href='employees.php'>返回首页</a>");
	}
	//关闭数据库
	mysql_close($link);

 ?>