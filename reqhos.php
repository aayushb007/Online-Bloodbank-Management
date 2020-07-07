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
<style>
.login-box{
    
    height: 800px;
    background: rgba(0, 0, 0,1);
    color: #fff;
	width:40%;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
	border: #009999;
    padding: 70px 30px;
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box input[type="text"], input[type="password"],input[type="tel"],input[type="email"],input[type="date"],textarea, input[type="number"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box select
{
    border: none;
    width:100%;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #999999;
    font-size: 16px;
}
.login-box input[type="radio"] 
{
display:inline-block;
vertical-align:middle;
background:transparent;
width:15px;
height:15px;
padding:2px;

    font-size: 16px;
}

.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #0099FF;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #0099FF;
}
  


</style>


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
<?php include_once('headerhos.php') ?>


<!-- ################################################################################################ -->
		<div class="wrapper row3">
		<br>

<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
		
  <main class="hoc container clear"> 
<div class="login-box">
     <form method="post" enctype="multipart/form-data">
      <h1>SEND REQUEST</h1>
                   

<br>Units:<input type="number" name="t2" required="required" pattern="[0-9]{2,2}" placeholder="no of units" title="please enter only  numbers between 2 to 2 for age" /> No of Patient:<input type="number" name="t3"  required="required" placeholder="No of patient that require blood" pattern="[0-9]{10,12}" title="please enter only numbers between 1 to 12 for mobile no." />Select Blood Group: <select name="t4" required><option value="" >Select</option>
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
</select><br>
Till Required Date:
<select name="month">
<option value="1">JAN</option>
<option value="2">FEB</option>
<option value="1">MARCH</option>
<option value="1">APRIL</option>
<option value="1">MAY</option>
<option value="1">JUNE</option>
<option value="1">JULY</option>
<option value="1">AUG</option>
<option value="1">SEPT</option>
<option value="1">OCT</option>
<option value="1">NOV</option>
<option value="1">DEC</option>
</select>
<select name="day">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>

<input type="text" name="year" value="2019" style=" width:50px"  /><br>




Detail<textarea name="t7" placeholder=" your details that use for responce "></textarea><br><input type="submit" value="Submit" name="sbmt" >

</form>
        </div>




	  </main>
</div>

<br><br><br><br><br><br><br><br><br>
<!-- ################################################################################################ -->
<?php include_once('footer.php') ?>
<?php
if(isset($_POST["sbmt"])) 
{
			
	$n=$_SESSION["name"];	
	$cn=mysqli_connect("localhost","root","","bloodbank");
		$d=$_POST["year"]."/".$_POST["month"]."/".$_POST["day"];
			$s="insert into hosreq(name,units,patients,tilldate,bg,details) values('" . $n ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $d .  "','" . $_POST["t4"] . "','" .  $_POST["t7"]  ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('request successfully saved');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 

</body>

</html>


