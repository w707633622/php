<?php 
	header("Content-type:text/html;charset=utf-8");
	//连接数据库
	$link = mysql_connect("localhost","root","123654");
	//判断是否链接成功
	if(!$link){
		echo("连接失败!!!");
	}
	//3.设置字符集
	mysql_set_charset("utf8");
	//4.选择数据库
	mysql_select_db("employee");
	//5.准备sql语句
	//$sql = "select * from employee";
	$sql = "insert into employee value('10','张军','6000','2018-07-31')";
	//6.发送语句
	$res = mysql_query($sql);
	//7.处理字符集
	/*while($result = mysql_fetch_array($res)){
		var_dump($result);
	}*/
	var_dump(mysql_num_rows($res));
	var_dump(mysql_affected_rows($link));

	//8.关闭数据库
	mysql_close($link);

 ?>