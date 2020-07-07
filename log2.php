<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
<title>BLOODBANK.IN</title>
<meta charset="utf-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link  href="layout/styles/log.css" rel="stylesheet" type="text/css" >
</head>
<body id="top">
<?php include_once('header.php') ?>
<br><br><br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- ################################################################################################ -->
		<div class="wrapper row3">
  <main class="hoc container clear"> 
<div class="login-box">
<img src="images/avatar.png" class="avatar">
        <h1>Login Here</h1>
<form method="post" enctype="multipart/form-data">
        
		E-Mail:<input type="email" name="t1" required="required" placeholder="Enter Username"/>
		Password:<input type="password"name="t2"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" placeholder="Enter Password"  />
		<input type="submit" value="Log In" name="sbmt" >Not A DONOR.?<a href="reg2.php" style="color: #00CCFF">Click here</a> to REGISTER.
		
		</div>

</form>

	  </main>
</div>

<br><br><br><br><br><br><br><br><br>
<!-- ################################################################################################ -->
<?php include_once('footer.php') ?>
<?php

$_SESSION['donorstatus']="";

if(isset($_POST["sbmt"])) 
{
	
	$cn=mysqli_connect("localhost","root","","BloodBank");					

			$s="select *from donarregistration where email='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	mysqli_close($cn);
	if($r>0)
	{
	    $_SESSION["email"]=$_POST["t1"];
       $_SESSION['donorstatus']="yes";
	   
echo "<script>location.replace('donor/welcome.php');</script>";
	}
	else
	{
	echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
?> 
</body>

</html>
	