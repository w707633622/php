<?php 
	//头,设置字符编码格式
	header("Content-type:text/html;chatset=utf-8");
	//1.连接数据库 2.判断数据库连接成功否
	$link = mysql_connect("localhost", "root", "123654");
	if(!$link){
		exit("数据库连接失败!!!");
	}
	//3.设置字符  4.选择数据库
	mysql_set_charset("utf8");
	mysql_select_db("employee");
	//5.设置语句  6.发送语句
	$sql = "select * from employee";
	$res = mysql_query($sql);
	//7.处理sql语句
	//$rows = mysql_fetch_assoc($res);

	echo("<table width = '700' border = '1'>");
		echo("<th>id</th><th>姓名</th><th>性别</th><th>工资</th><th>创建时间</th><th>操作</th>");
		while($rows = mysql_fetch_assoc($res)){
			print("<tr>");
				print("<td>{$rows['id']}</td>");
				print("<td>{$rows['username']}</td>");
				print("<td>{$rows['sex']}</td>");
				print("<td>{$rows['salary']}</td>");
				print("<td>{$rows['time']}</td>");
				print("<td><a href='update.php?id={$rows['id']}'>修改</a><a href='delete.php?id={$rows['id']}'>删除</a></td>");
			print("</tr>");
		}
	echo("<table>");

	//8.关闭数据库
	mysql_close($link);

 ?>