
<!DOCTYPE html>
<html>
<head>
<title>BLOODBANK.IN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/reg.css" rel="stylesheet" type="text/css" media="all">
</head>


<body id="top">
<?php include_once('header.php') ?>
<!-- ################################################################################################ -->
<br style="background-color:#FFFFFF">


<div class="wrapper row3" >

  <main class="hoc container clear"> 
  <br>
<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br>
<br>
<br>
<br>
<br>

<div class="login-box" style="width:800px;background: rgba(0, 0, 0,1);">	
	<h3>Registration here</h3>
<form method="post" enctype="multipart/form-data">
patient Name:<input type="text" name="t1" required="required" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" placeholder="your full name" />
 Gender: <select name="r1" ><option selected disabled="disabled">your gender<option>male</option><option>female</option><option>other</option></select>

BirthDate<input type="date" name="t2" required="required" placeholder="your birth date"  />Mobile No<input type="tel" placeholder="your mobile number" name="t3" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." /> Blood Group<select name="t4" required><option value="">Select</option>
<?php
$cn=mysqli_connect("localhost","root","","bb");
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
</select>E-Mail<input type="email" placeholder="your email id" name="t5" required="required" />Password<input type="password" name="t6" required="required" pattern="[a-zA-Z0-9]{2,10}"  placeholder="password" stitle="please enter only character or numbers between 2 to 10 for password" />Confirm Password<input type="password" name="t7" required="required" pattern="[a-zA-Z0-9 ]{2,10}" title="please enter only character or numbers between 2 to 10 for password" />

<tr><td class="lefttd">Uplode Pic</td><td><input type="file" name="t8" />
   Capcha:<input type="text" name="cap" />
<img src="capcha.php" /><br>
<br>
<input type='submit' name='chek' value="REGISTER" >
	 </form></div>
	 
	  </main>
	  
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<!-- ################################################################################################ -->
<?php include_once('footer.php') ?>
<?php
if(isset($_POST["chek"])) 
{
$target_dir = "doner_pic/";
$target_file = $target_dir . basename($_FILES["t8"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["t8"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
//aloow certain file formats
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t8"]["tmp_name"], $target_file)){
		$cn=mysqli_connect("localhost","root","","bb");
			$s="insert into patientregistration(name,gender,bdate,mobile,b_id,email,pwd,pic) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] .  "','" . basename($_FILES["t8"]["name"])  ."')";
			
			//$s="INSERT INTO donarregistration(name,gender,age,mobile,b_id,email,pswd,pic) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])"
	mysqli_query($cn,$s);
	mysqli_close($cn);
	if($s>0)
	{
	echo "<script>alert('Registration successfull');</script>";
	}
	else
	{echo "<script>alert('Registration not  successfull');</script>";
	}
		} else{
			echo "sorry there was an error uploading your file.";
		}	
	
	}
}
?> 

</body>
</html>