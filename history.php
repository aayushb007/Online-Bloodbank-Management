<?php
    
    session_start();
      
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
<?php

if($_SESSION['donorstatus']=="")
{
	header("location:log1.php");
}
?>
<?php include_once('headerdonor.php') ?><!-- ################################################################################################ -->

<div class="wrapper row3">



  <main class="hoc container clear"> 
  <div >
     <form method="post" enctype="multipart/form-data">
  <table cellspacing="0" cellpadding="0" width="800px" style="margin:auto" class="tableborder" >
        
        <tr><td colspan="4" align="center"><h1>YOUR DONATION HISTORY</h1> </td></tr>
        <tr><td colspan="4">&nbsp;</td></tr>
   
             <tr style="background-color:bisque" align="center" class="bold">     
           <td>Camp Name</td><td>No. of Units</td><td>Date of Donation</td><td>Details</td>
        </tr>
          <tr><td colspan="4">&nbsp;</td></tr>
    <?php

	
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from camp,donation where camp.camp_id=donation.camp_id and donation.email='" . $_SESSION["mail"] . "'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:50px'>$data[1]</td><td  style=' padding-left:50px'>$data[9]</td><td  style=' padding-left:40px'>$data[10]</td><td  style=' padding-left:30px'>$data[12]</td></tr>";
			}
			mysqli_close($cn);
			?>               






</table>
</form>
        </div>
		<br><br>
<footer><a class="btn" href="welcome.php"> &lt;BACK TO MENU</a></footer>

 
    </main>
</div>
<?php include_once('footer.php') ?>
</body>

</html>