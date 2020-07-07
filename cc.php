<?php

$email=$_POST["mail"];

$b=$_POST["bg"];
$p=$_POST["pwd"];
$con=mysql_connect("localhost","root","");
if ($con)
{
mysql_select_db("","$con");
$query="insert into reg value($n,$m,$email,$s,$b,$p);";
$re=mysql_query($query,$con);
if ($re) {
	echo "registered";
}
	
}
mysql_close()



?>