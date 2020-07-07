<?php
if(isset($_POST['chek']))
{
session_start();
//$code=$_SESSION['cap_code'];
//$user=$_POST['cap'];
if($_SESSION['cap_code']===$_POST['cap'])
{
echo "valid";
}
else
{
echo "unvalid";
}
}
?>

<html>
<head>
</head>
<body>
<form action="result.php" method="post">
capcha:<input type="text" name="cap" />
<img src="capcha.php" />
<input type="submit" name="chek" value="register" /> 
</form>
</body>
</html>
