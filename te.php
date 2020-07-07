<?php
if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['mail']) && isset($_POST['gender']) && isset($_POST['bg']) && isset($_POST['pwd']) && isset($_POST['cpwd']) && isset($_POST['ad']) && isset($_POST['bid']) && isset($_POST['city']) && isset($_POST['bdate']) && isset($_POST['chek']) && isset($_FILES['file']['name']))
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
if ($con)
{
mysqli_select_db($con,"test");
$query="insert into reg(name,phone,mail,pwd,cpwd,gender,bg,ad,city,bdate,bid)
 values('$n','$m','$email','$p','$cp','$g','$b','$ad','$ct','$bd','$id');";
$re=mysqli_query($con,$query);
if ($re) {
     echo "you are registered sucessfully')"; 
}
 else{
echo "Registration failed";
 } 
}
mysqli_close($con);
}
?>