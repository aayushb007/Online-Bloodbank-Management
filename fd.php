
<!DOCTYPE html>
<html>
<head>
<title>BLOODBANK.IN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/fd.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<?php include_once('header.php') ?>
<!-- ################################################################################################ -->
<div class="wrapper row3" align="center">
  <main class="hoc container clear"> 
 

     <div class="login-box" style="">
        <h1>find donor</h1>
        <form action="fd.php" method="post">
            Bloodgroup:<br><select name="bg"><option>-Your bloodgroup-</option><option>A+</option><option>A-</option><option>B+</option><option>B-</option><option>AB+</option><option>AB-</option><option>O+</option><option>O-</option></select><br>
        City:<br>
    <select name="city"><option>-Your City-</option><option>Ahmedabad</option><option>Surat</option><option>Banaskantha</option><option>Vadodara</option><option>Porbandar</option><option>Jamnagar</option></select>
    <br> <br>
    <input type="submit" name="find" value="FIND">  
        </form>
		
    </div>
	<br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br>
   
	<div align="center">
    <br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br>
  <h1>AVAILABLE DONORS ARE GIVEN BELOW:</h1>
<br>
	<table border="2" width="600">
	<tr><th>name</th><th>phone</th><th>mail</th>
	</tr>
	<?php
if(isset($_POST["bg"]) && isset($_POST["city"]))
{
$bg=strval($_POST["bg"]);
$city=strval($_POST["city"]);
$con=mysqli_connect("localhost","root","");
if ($con)
{
mysqli_select_db($con,"bb");
$query="select name,phone,mail from reg where bg='$bg' &&  city='$city';";
$re=mysqli_query($con,$query);
if($re){
while($row=mysqli_fetch_array($re)) {
  $showname=$row[0];
   $showphone=$row[1];
    $showmail=$row[2];
	echo "<tr><td> $showname </td><td>$showphone</td><td>$showmail</td></tr>";
	
	
}
}
else
{
 echo "<script>alert('');</script>"; 
}
  
} 
mysqli_close($con);
}
?>
</table>
	</div>

<br><br><br><br><br><br><br><br><br>
</div>
<?php include_once('footer.php') ?>
<!-- ################################################################################################ -->
</body>
	 
</html>

