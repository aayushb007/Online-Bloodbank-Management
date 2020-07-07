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
<?php include_once('header.php') ?>
<!-- ################################################################################################ -->




<div class="wrapper row3" align="left">



  <main class="hoc container clear"> 
<div style="height:500px; width:1000px; margin:auto; margin-top:50px; margin-bottom:50px; background-color: #FFFFFF; border:2px solid #FFFFFF; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
 <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >

   <tr style="background-color:black; color:#FFFFFF"><td colspan="7" align="center"><h1>PATIENTS THAT REQUEST FOR BLOOD ARE GIVEN BELOW</h1></td></tr>

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color: #666666; color:#FFFFFF" align="center" class="bold">            
             <td class="bold" style="color:red"  >Blood Group</td><td align="center">Name</td><td align="center">Gender</td><td align="center">Mobile No</td><td align="center">Email</td>
            <td align="center">Till Required Date</td>
        </tr>
                   



<?php
 
       
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select bg.bg_name,r.name,r.gender,r.mobile,r.email,r.reqdate from bloodgroup bg,requestes r where r.bgroup=bg.bg_id ";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:50px'>$data[0]</td><td  style=' padding-left:10px'>$data[1]</td><td  style=' padding-left:20px'>$data[2]</td><td  style=' padding-left:20px'>$data[3]</td><td  style=' padding-left:20px'>$data[4]</td><td  style=' padding-left:20px'>$data[5]</td></tr>";
			}
			mysqli_close($cn);
			?>


</table>
</form>
        </div>
          
        <div class="clear"></div>
		<br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><footer><a class="btn" href="welcome.php"> &lt;BACK TO MENU</a></footer>
  <br><br>  </main>
</div>

<!-- ################################################################################################ -->

<?php include_once('footer.php') ?>
</body>
</html>