<?php  if(!isset($_SESSION)) {session_start();} ?>
<?php

if($_SESSION['donorstatus']=="")
{
  header("location:log1.php");
}
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
<?php include_once('headerdonor.php') ?>
<!-- ################################################################################################ -->

<div class="wrapper row3">



  <main class="hoc container clear"> 

 <h1 class="heading" align="center">Available hospitals for donation are given below:</h1>
        <form method="post">
<table border="0" align="center" width="400px" height="30px" >
<tr><td colspan="2" align="center" >HOSPITAL </td></tr>
<tr><td align="center" style="padding-top:10px">
<table border="1" align="center" width="80%" height="200px" >
<tr><th>HOSPITAL_Id </th><th align="center">NAME</th><th align="center">ADDRESS</th> <th align="center">DATE</th></tr>
<tr><td>
<?php
$cn=mysqli_connect("localhost","root","","bb");
$s="select * from hospital";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		
			echo "<tr><td style='padding-left:10px'>$data[0]</td><td  style='padding-left:3s0px'>$data[1]</td><td  style='padding-left:70px'>$data[2]</td><td  style='padding-left:70px'>$data[3]</td>";
		}
		
		
		
	
	mysqli_close($cn);

?>
</td></tr>
</table>
</table>


</form>
<br><br>
<footer><a class="btn" href="welcome.php"> &lt;BACK TO MENU</a></footer>

    </main>
</div>

<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 class="heading">joinus</h2>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
      <p class="nospace btmspace-50">now a time to support </p>
      <hr>
    </div>
    <div class="group btmspace-50">
      <div class="one_third first">
        <h6 class="heading">CONTACT US</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fa fa-map-marker"></i>
            <address>
             &amp; building no:65,vande mataram, ahmedabad
            </address>
          </li>
          <li><i class="fa fa-phone"></i> +91 356 324 76541</li>
          <li><i class="fa fa-fax"></i>+91 9157535517  </li>
          <li><i class="fa fa-envelope-o"></i> BB@govt.com</li>
        </ul>
      </div>
      <div class="one_third">
        <h6 class="heading">best comments</h6>
        <ul class="nospace linklist">
          <li>
            <article>
              <h2 class="nospace font-x1"><a href="#">vishal chauhan</a></h2>
              <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
              <p class="nospace"> this website is official and very helful.thanks..</p>
            </article>
          </li>
          <li>
            <article>
              <h2 class="nospace font-x1"><a href="#">tirth</a></h2>
              <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
              <p class="nospace">now i am donor in blood bank.[&hellip;]</p>
            </article>
          </li>
        </ul>
      </div>
      <div class="one_third">
        <h6 class="heading">enter your feedback</h6>
       
        <form method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" placeholder="Name">
            <input class="btmspace-15" type="text" value="" placeholder="Email">
      <input class="btmspace-15" type="text" value="" placeholder="message">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
    </div>
    <hr class="btmspace-50">
    <nav>
      <ul class="nospace inline pushright uppercase center">
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">help</a></li>
        
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">LIFE@ONE TOUCH</a></p>
   
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>