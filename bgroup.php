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
   <h1>AVAILABLE BLOODGROUPS ARE GIVEN BELOW:</h1>
<br>
	      <form method="post">
<table border="0" align="center" width="400px" height="30px" >
<tr><td colspan="2" align="center" >View camps </td></tr>
<tr><td align="center" style="padding-top:10px">
<table border="1" align="center" width="80%" height="200px" >
<tr><th>BLOODGROUP_Id </th><th align="center">BLOODGROUP</th></tr>
<tr><td>
<?php
$cn=mysqli_connect("localhost","root","","bb");
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		
			echo "<tr><td style='padding-left:10px'>$data[0]</td><td  style='padding-left:3s0px'>$data[1]</td></tr>";
		}
		
		
		
	
	mysqli_close($cn);

?>
</td></tr>
</table>
</table>


</form>
	</div>

<br><br><br><br><br><br><br><br><br>


	  </main>
</div>

<br><br><br><br><br><br><br><br><br>
<!-- ################################################################################################ -->
<?php include_once('footer.php') ?>
</body>

</html>


