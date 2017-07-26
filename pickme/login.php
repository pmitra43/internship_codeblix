<?php
$servername="mysql11.000webhost.com";
$databasename="data";
$username="a2099961_pm";
$password="31january";
$con=mysql_connect($servername,$username,$password);
mysql_select_db($databasename,$con);
$function_name=$_GET['callback'];
$user=$_GET['user'];
$pass=$_GET['pass'];
$parent='$user';
$query="select * from users where username='$user'";
$result=mysql_query($query);
$rows=mysql_num_rows($result);
if($rows==0)
	$check=1;

$query="select * from users where username='$user' and password='$pass'";
$result=mysql_query($query);
$rows=mysql_num_rows($result);
if($rows==0)
	$check=2;
else
	$check=0;
$arr = array('key1' => $check, 'key2' => $parent);
echo $function_name.'('.json_encode($arr).')';
?>