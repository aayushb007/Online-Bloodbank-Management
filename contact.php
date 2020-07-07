 <?php
 if(isset($_POST['log']))
 {
 
 
$email=strval($_POST["mail"]);
$tel=$_POST["tel"];
$pass=$_POST["msg"];
$con=mysqli_connect("localhost","root","");
if ($con)
{
mysqli_select_db($con,"bb");
$query="insert into contactus values($email,$tel,$pass);";
$re=mysqli_query($con,$query);
if ($re) {
  echo "<script>alert('sucessfully recorded');</script>";
}
  
}
mysqli_close($con);
}
?><!DOCTYPE html>
<html>
<head>
<title>BLOODBANK.IN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/log.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
<?php include_once('header.php') ?>

<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 

<div  bgcolor="white" class="sectiontitle center" >
      <h6 class="heading"><img src="images/contact.png"</h6>
      
    </div>
    <br><br><br><br><br><br>
	<br><br><br>
	
	<div class="login-box" style="height:500px">
	<h1>contact us</h1>
<form action="contact.php" method="POST" >

 
 Name:<input type="text" name="t1" placeholder="your name"  required="required" pattern="[a-zA-Z _]{2,15}" title="please enter only character  between 2 to 15 for donor name" />E-Mail:<input type="email" placeholder="your mail address" name="t2" required="required" />Mobile No:<input type="TEL" name="t3"   pattern="[0-9]{10,12}"  placeholder="your mobile number" title="please enter only numbers between 10 to 12 for mobile no." />
 subject:<input type="text" name="t3" placeholder="your related subject"  required="required" />

<input type="submit" value="Send Us" name="sbmt">
  
 
 </form>
</div>
	  </main>
</div>

<?php include_once('footer.php') ?>
<!-- ################################################################################################ -->
<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 
</body>
</html>
