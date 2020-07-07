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

if ($con)
{

mysqli_select_db($con,"bb");
$q="select * from reg where bid='$id' ";
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
// header("location:welcome.php");
echo "<script>alert('Registration successfull');</script>";

}
else{
// header("location:reg2.php");
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



<!DOCTYPE html>
<html>
<head>
<title>BLOODBANK.IN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/reg.css" rel="stylesheet" type="text/css" media="all">
</head>


<body id="top">
<?php include_once('header.php') ?>
<!-- ################################################################################################ -->
<br style="background-color:#FFFFFF">


<div class="wrapper row3" >

  <main class="hoc container clear"> 
  <br>
<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br>
<br>
<br>
<br>
<br>

<div class="login-box" style="width:800px;background: rgba(0, 0, 0,1);">	
	<h3>Registration here</h3>
    
<form action="reg2.php" method="POST"  >
Your Name:<input type='text' name='name' placeholder="your name" pattern="[a-zA-Z _]{4,20}" title="please enter only character  between 4 to 15 for donor name" required="required">
   Your bloodbank id:<input type='text' name='bid' placeholder="your bloodbank id" pattern="[a-zA-Z0-9]{4,10}" title="please enter only character  between 4 to 15 for donor name" required="required">
   Your Phone number:<input type='tel' name='phone' placeholder="Phone No." pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." required>
   
   Mail id:<input type='email' name='mail' required="yes" placeholder="Email" required>
   Password:<input  type='password'  name='pwd' placeholder="Password"  pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 12 to 18 for password" required>
   Confirm Password:<input type='password' name='cpwd' placeholder="Password"  pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 12 to 18 for password" required>
   Gender: <select name="gender" ><option selected disabled="disabled">your gender<option>male</option><option>female</option><option>other</option></select>
   Birthdate:<input type="date" name="bdate"  required>
   Blood group:<select name="bg"><option selected disabled="disabled">-Your bloodgroup-</option><option>A+</option><option>A-</option><option>B+</option><option>B-</option><option>AB+</option><option>AB-</option><option>O+</option><option>O-</option></select>
   City:<select name="city"><option selected disabled="disabled">-Your City-</option><option>Ahmedabad</option><option>Surat</option><option>Banaskantha</option><option>Vadodara</option><option>Porbandar</option><option>Jamnagar</option></select>
   Address:<input type="text" name="ad" placeholder="Address" required>
   
   Capcha:<input type="text" name="cap" />
<img src="capcha.php" /><br>
<br>
<input type='submit' name='chek' value="REGISTER" >
	 </form></div>
	 
	  </main>
	  
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!-- ################################################################################################ -->
<?php include_once('footer.php') ?>

</body>
</html>