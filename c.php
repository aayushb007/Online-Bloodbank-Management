<?php
$n=$_POST["name"];
$m=$_POST["phone"];
$email=$_POST["mail"];
$g=$_POST["gender"];
$b=$_POST["bg"];
$p=$_POST["pwd"];
$cp=$_POST["cpwd"];
$ad=$_POST["add"];
$id=$_POST["bid"];
$ct=$_POST["city"];
$bd=$_POST["bdate"];
$con=mysqli_connect("localhost","root","");
if ($con)
{
mysqli_select_db("","$con");
$query="insert into reg value($n,$m,$email,$p,$cpwd,$g,,$b,$ad,$ct,$bdate,1,$id);";
$re=mysqli_query($query,$con);
if ($re) {
	echo "registered";
}
	
}
mysqli_close()



?>