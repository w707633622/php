<?php 
/*
	php链接数据库
*/
	//设置头,编码方式
	header("Content-type:text/html;charset=utf-8");
	//1.连接数据库
	$link = mysql_connect("localhost","root","123654");
	var_dump($link);
	//2.判断是否链接成功
	if(!$link){
		exit("连接数据库失败!!");
	}
	//3.设置字符集
	mysql_set_charset("utf8");

	//4.选择数据库
	mysql_select_db("employee");

	//5.准备数据库语句
	$sql = "select * from employee";

	//6.发送数据库语句
	$res = mysql_query($sql);
	var_dump($res);//resource(4, mysql result)
	
	//7.处理结果集
	/*$result = mysql_fetch_row($res);//输出结果为索引关联数组
	while($result = mysql_fetch_row($res)){
		var_dump($result);
	}*/
	$result = mysql_fetch_array($res);
	
	//8.关闭数据库
	mysql_close($link);

 ?>