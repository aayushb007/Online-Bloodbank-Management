<?php  session_start(); ?>
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
<div class="login-box">
    <img src="images/avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="actlog.php" method="POST">
            <p>Username</p>
            <input type="email" name="mail" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password" required>
            <input type="submit" name="log" value="Login">

            <a href="#">Forget Password</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <a href="reg2.php">sign in?</a>   
			 
            </form>
        </div>



	  </main>
</div>

<br><br><br><br><br><br><br><br><br>
<!-- ################################################################################################ -->
<?php include_once('footer.php') ?>
</body>

</html>


