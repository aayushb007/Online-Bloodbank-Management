<?php  if(!isset($_SESSION)) {session_start();} ?>
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

<div class="wrapper row3">



  <main class="hoc container clear"> 

 <h1 class="heading" align="center">Available hospitals for donation are given below:</h1>
        <form method="post">
<table border="0" align="center" width="400px" height="30px" >
<tr><td colspan="2" align="center" >HOSPITAL </td></tr>
<tr><td align="center" style="padding-top:10px">
<table border="1" align="center" width="80%" height="200px" >
<tr><th>HOSPITAL_Id </th><th align="center">NAME</th><th align="center">ADDRESS</th> <th align="center">DATE</th></tr>
<tr><td>
<?php
$cn=mysqli_connect("localhost","root","","bb");
$s="select * from hospital";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		
			echo "<tr><td style='padding-left:10px'>$data[0]</td><td  style='padding-left:3s0px'>$data[1]</td><td  style='padding-left:70px'>$data[2]</td><td  style='padding-left:70px'>$data[3]</td>";
		}
		
		
		
	
	mysqli_close($cn);

?>
</td></tr>
</table>
</table>


</form>
<br><br>
<footer><a class="btn" href="welcome.php"> &lt;BACK TO MENU</a></footer>

    </main>
</div>

<!-- ################################################################################################ -->
<?php

if($_SESSION['donorstatus']=="")
{
	header("location:../log2.php");
}
?>
<?php include_once('footer.php') ?>
</body>
</html>