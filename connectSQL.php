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
	//var_dump($res);//resource(4, mysql result)
	
	//7.处理结果集
	//$result = mysql_fetch_assoc($res);//这条语句已经用res将id=1取了出来,后面只会从id=2开始取数
	//var_dump($result);//只输出第一条,再调用次条语句,输出第二条表格id=2的数据
	//输出了id=1的
	/*'
	id' => string '1' (length=1)
	'username' => string '王宝强' (length=9)
	'salary' => string '2000' (length=4)
	'time' => string '2018-07-30' (length=10)
	*/

	//30行已经用res输出了一次id=1,这里从id=2开始输出
	while($result = mysql_fetch_assoc($res)){
		var_dump($result);
	}
	while($row = mysql_fetch_assoc($res)){//因为26行res已经取完了数据,所以这里没有执行
		var_dump($row);
	}

	//8.关闭数据库
	mysql_close($link);

 ?>