<!DOCTYPE html>
<html>
<head>
<title>BLOODBANK.IN</title>
<meta charset="utf-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link  href="layout/styles/fd.css" rel="stylesheet" type="text/css" >


</head>
<body id="top">
<?php include_once('header.php') ?>



<!-- ################################################################################################ -->
		<div class="wrapper row3">
		
  <main class="hoc container clear">
  <br><br><br><br> <br><br><br><br><br><br><br><br>
   <div class="login-box" style=" height: 300px;">

     <form method="post" enctype="multipart/form-data">
   
        Select Blood Group:<select name="s2" required><option value="">Select</option>

<?php
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>



</select>

<?php
if(isset($_POST["show"]))
{
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from bloodgroup where bg_id='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$bg_id=$data[0];
	$bg_name=$data[1];
	
		
		
	mysqli_close($cn);
}
?>
<br><br>
<input type="submit" value="Search" name="sbmt" ">


		
</form>
</div>

     
		
	
</div>

<?php 
if(isset($_POST["sbmt"]))
{
	//header("location:result.php?bg=".$_POST["s2"]);
	echo "<script>location.replace('resultdon.php?bg=". $_POST["s2"] ."');</script>";
}

?>
<br><br><br><br><br><br><br><br><br>


	  </main>
</div>

<br><br><br><br><br><br><br><br><br>
<!-- ################################################################################################ -->
<?php include_once('footer.php') ?>
</body>

</html>


