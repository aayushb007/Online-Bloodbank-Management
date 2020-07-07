<?php  if(!isset($_SESSION)) {session_start();} ?>
<?php
if($_SESSION['loginstatus']=="")
{
  header("location:loghospital.php");
}?>
<!DOCTYPE html>
<html>
<head>
<title>BLOODBANK.IN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/side.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<?php include_once('headerhos.php') ?>
<!-- ################################################################################################ -->

<div class="wrapper row3">



  <main class="hoc container clear"> 

 <h1 class="heading" align="center"> 
<?php 
   echo "Welcome ". $_SESSION["name"];
   	  
?><br><br>
<br>
    <div align="center"><br> <footer><a class="btn" href="editacch.php">EDIT ACCOUNT DETAILS</a></footer><br>
	  <footer><a class="btn" href="reqhos

	  	.php">SHOW BLOOD REQUEST</a></footer><br>
	   <footer><a class="btn" href="hoscamp.php">SHOW CAMPS</a></footer><br>
	    <footer><a class="btn" href="viewhos.php">VIEW HOSPITALS</a></footer><br>
	    <footer><a class="btn" href="logouthos.php">LOGOUT</a></footer></div>
	  

</h1>
    </main>
</div>

<!-- ################################################################################################ -->
<?php include_once('footer.php') ?>
</body>
</html>