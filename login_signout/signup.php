<?php
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="data";
	$con=mysql_connect($servername,$username,$password);
	mysql_select_db($databasename,$con);
	$query="select * from user_table where mail='$_POST[mail]'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count == 0)
	{
		$query="insert into user_table values('','$_POST[mail]','$_POST[pwd]','p')";
		mysql_query($query);
		echo "inserted";
	}
	else
	{
		echo "Same mail ID already exists.<br>Try to log in";
	}
?>