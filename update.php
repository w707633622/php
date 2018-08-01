<?php 
	//头,设置字符编码格式
	header("Content-type:text/html;chatset=utf-8");
	print("修改页");
	$id = $_GET["id"];
	//echo($id);
	$link = mysql_connect("localhost","root","123654");
	if(!$link){
		exit("数据库连接失败!!!");
	}

	mysql_set_charset("utf8");
	mysql_select_db("employee");

	$sql = "select * from employee where id = {$id}";
	$res = mysql_query($sql);

	$rows = mysql_fetch_assoc($res);
	//var_dump($rows);

	mysql_close($link);
	
 ?>

 <html>
 	<form action="doUpdate.php">
 		<!-- 将id隐藏 -->
 		用户名id&ensp;: &ensp; <input type="hidden" name="id" value="<?php print ($rows['id']) ?>"><br> <!-- $rows[]返回字符串,所以在print中不加"" -->
 		&ensp;&ensp;姓名&ensp;&ensp;: &ensp;&ensp;<input type="text" name="username" value="<?php print($rows['username'])?>"><br>
 		&ensp;&ensp;性别&ensp;&ensp;: &ensp;&ensp;<input type="text" name="sex" value="<?php print($rows['sex'])?>"><br>
 		&ensp;&ensp;工资&ensp;&ensp;: &ensp;&ensp;<input type="text" name="salary" value="<?php print($rows['salary'])?>"><br>
 		创建时间: &ensp;&ensp;<input type="text" name="time" value="<?php print($rows['time'])?>"><br>
 		<input type="submit" name="提交修改" value="提交修改">
 	</form>
 </html>