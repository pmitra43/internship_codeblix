<?php
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="data";
	$con=mysql_connect($servername,$username,$password);
	mysql_select_db($databasename,$con);

	$query="select * from user_table where mail='$_POST[mail]'";
	$ret=mysql_query($query);
	if($ret == false)
		echo "No accounts found";
	else
	{
		$query="select pwd from user_table where mail='$_POST[mail]' and password='$_POST[pwd]'";
		$res=mysql_query($query);
		if($ret == false)
			echo "Mail and password does not match";
		else
			echo "successfully logged in";
	}
?>