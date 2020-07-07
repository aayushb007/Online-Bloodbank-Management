<?php if(!isset($_SESSION)) { session_start(); } ?>
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
        <h1>Hospital Login</h1>
            <form method="POST" action="loghospital.php" enctype="multipart/form-data">
            <p>Hospital name:</p>
            <input type="text" name="t1" placeholder="Enter Hospital" required>
            <p>Password:</p>
            <input type="password" name="t2" placeholder="Enter Password" required>
            <input type="submit" name="log" value="Login">

            
            </form>
        </div>



	  </main>
</div>
<?php
$_SESSION['loginstatus']="";
if(isset($_POST["log"])) 
{
	
	$cn=mysqli_connect("localhost","root","","bb");		

			$s="select *from hospital where name='" . $_POST["t1"] . "' and password='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	$data=mysqli_fetch_array($q);
	
	
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["name"]=$_POST["t1"];
		$_SESSION["usertype"]=$data[2];
		$_SESSION['loginstatus']="yes";

header("location:welhos.php");
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
	

?> 
<br><br><br><br><br><br><br><br><br>
<!-- ################################################################################################ -->
<?php include_once('footer.php') ?>
</body>

</html>


