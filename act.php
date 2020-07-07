<?php

if(isset($_POST['chek']))
{
session_start();
if($_SESSION['cap_code']===$_POST['cap'])
{
$n=strval($_POST["name"]);
$m=strval($_POST["phone"]);
$email=strval($_POST["mail"]);
$g=strval($_POST["gender"]);
$b=strval($_POST["bg"]);
$p=strval($_POST["pwd"]);
$cp=strval($_POST["cpwd"]);
$ad=strval($_POST["ad"]);
$id=strval($_POST["bid"]);
$ct=strval($_POST["city"]);
$bd=strval($_POST["bdate"]);
$con=mysqli_connect("localhost","root","");
$_SESSION['mail']= $email;
if ($con)
{

mysqli_select_db($con,"bb");
$q="select * from reg where bid='$id'  && pwd='$p'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num==1)
{
 echo "<script>alert('Please enter other bloodbank id');</script>";
}
else{
$query="insert into reg values('$n','$m','$email','$p','$cp','$g','$b','$ad','$ct','$bd','$id')";
$re=mysqli_query($con,$query);

if ($re) {
 header("location:welcome.php");
echo "<script>alert('Registration successfull');</script>";

}
else{
 header("location:reg2.php");
echo "<script>alert('Registration failed try again');</script>";
 } 
}
}
mysqli_close($con);
}
}
else
{
 header("location:reg2.php");
echo "<script>alert('Invalid Capcha');</script>";
}
?>

