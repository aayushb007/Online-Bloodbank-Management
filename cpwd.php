<?php  if(!isset($_SESSION)) {session_start();} ?>
<?php

if($_SESSION['donorstatus']=="")
{
	header("location:log1.php");
}
?>
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
<?php include_once('headerdonor.php') ?>
<!-- ################################################################################################ -->

 
<div class="wrapper row3" align="left">
<main class="hoc container clear"> 
<div style="height:300px; width:600px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid white; box-shadow:4px 1px 20px black;">
<form method="post">
     <table cellpadding="0" cellspacing="0" width="500px" class="tableborder" style="margin:auto" >

        <tr style="background-color:black; color:white;"><td colspan="2" align="center">CHANGE YOUR PASSWORD</td></tr>
   
                <tr><td><img src="images/h_bg.png" width="150px" height="150px" align="right"/></td>
                    <td style="vertical-align:top"><table cellpadding="0" cellspacing="0">
   
        <tr><td class="lefttd"  style="vertical-align:middle"> Old Password </td><td><input type="password" name="t2"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle"> New Password:</td><td><input type="password" name="t3"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for new password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle"> Comfirm Password</td><td><input type="password"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for confirm password" name="t4"/></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" value="Change" name="sbmt" style="border:0px; background:linear-gradient(#900, #00CCFF); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	
		</table></td></tr></table>	
        </form>
	</div>
	    </main>
</div>
<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=mysqli_connect("localhost","root","","bb");			

			$s="select * from reg where mail='" .$_SESSION["mail"] . "' and  pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	if($r>0)
	{
	
	$s1="update reg set pwd='" . $_POST["t3"]  ."' where mail='" .$_SESSION["mail"] ."'";
	mysqli_query($cn,$s1);
	mysqli_close($cn);
	echo "<script>alert('PASSWORD CHANFGED SUCCESSFULLY');</script>";

	}
	else
	{
		echo "<script>alert('Invalid old Password');</script>";
	}
		
		}	
	

?>
<?php

if($_SESSION['donorstatus']=="")
{
	header("location:../log1.php");
}
?>
 



<!-- ################################################################################################ -->
<?php include_once('footer.php') ?>
</body>
</html>