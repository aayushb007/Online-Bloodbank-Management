<?php
session_start();
//echo "string";
$_SESSION['donorstatus']="";
if(isset($_POST['log']))
{

$email=strval($_POST["mail"]);
$p=strval($_POST["pwd"]);
$con=mysqli_connect("localhost","root","");
//echo "$p","$email";
$_SESSION['mail']= $email;
if ($con)
{
mysqli_select_db($con,"bb");
$q="select * from reg where mail='".$email."' and pwd='".$p."'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num==1)
{
$query="insert into login values('".$email."','".$p."')";
$re=mysqli_query($con,$query);
if ($re) {
$_SESSION['donorstatus']="yes";
header("location:welcome.php");
echo "<script>alert('Registration successfull');</script>";
}
else{
echo "<script>alert('Registration failed try again');</script>";
 } 
}
 

else{

header("location:log1.php");
echo "<script>alert('Please enter other bloodbank id');</script>";
}
}
mysqli_close($con);
}

?>

