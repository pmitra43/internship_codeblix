<?php

//echo "Welcome";

$servername="mysql5.000webhost.com";
$database="a6629322_happ";
$username="a6629322_pm";
$password="abcd1234";
$conn=mysql_connect($servername,$username,$password);
mysql_select_db($database,$conn);

$function_name=$_GET['jsonp'];
$un=$_GET['user'];
$pw=$_GET['pass'];
$query="select * from user where user='$un' and pass='$pw'";
$result=mysql_query($query);
$rows=mysql_num_rows($result);

$json_array=array();

if($rows>0)
{
  $json_array['status']='1';
}
else
{
  $json_array['status']='0';
}

echo "$function_name(\n";
echo json_encode($json_array);
echo ");\n";

?>			