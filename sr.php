<?php
if(isset($_POST['chek']))
{
session_start();
//$code=$_SESSION['cap_code'];
//$user=$_POST['cap'];
if($_SESSION['cap_code']===$_POST['cap'])
{
echo "<script>alert('your request sended  sucessfully');</script>";
//header(location:"log.html");
}
else
{
 // echo "<script>alert('sorry, you are registered');</script>";
  //header(location:"reg2.php");
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>BLOODBANK.IN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> lifeonetouch@mail.in</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="index.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="log.php">Login</a></li>
        <li><a href="reg2.php">Register as donor</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h1><a href="index.php">Life@one touch</a></h1>
    <p>blood bank website</p>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a class="drop" href="#">DONORS</a>
        <ul>
          <li><a href="pages/gallery.html">HOW TO DONATE? </a></li>
          <li><a href="pages/full-width.html">FIND DONORS</a></li>
          <li><a href="pages/sidebar-left.html">CAMPS</a></li>
          <li><a href="pages/sidebar-right.html">HOSPITALS</a></li>
          <li><a href="pages/basic-grid.html">DONOR DETAILS</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">BANK</a>
        <ul>
          <li><a href="#">ABOUT BLOOD BANK</a></li>
          <li><a class="drop" href="#">BLOOD</a>
            <ul>
              <li><a href="#">A+</a></li>
              <li><a href="#">A-</a></li>
              <li><a href="#">B+</a></li>
			  <li><a href="#">B-</a></li>
			  <li><a href="#">AB+</a></li>
			  <li><a href="#">AB-</a></li>
			  <li><a href="#">0+</a></li>
			  <li><a href="#">O-</a></li>
            </ul>
          </li>
          <li><a href="#">CONNECT HOSPITALS
		  </a></li>
        </ul>
      </li>
	  <li><a href="#">ABOUT US</a></li>
	  <li><a href="contact.php">CONTACT US</a></li>
    </li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3" style="border-color:#FF0000">
  <main class="hoc container clear"> 

<div  bgcolor="white" class="sectiontitle center" >
      <h6 class="heading"><img src="images/brequest.png"></h6>
      
    </div>
	
	
    
<form action="reg2.php" method="POST"  style="background-color: #FFFFFF">

   <table border='1' width='480px' cellpadding='0' cellspacing='0' align='center' style="background-color:#FFFFFF" >
<center><tr>
   <td><h1></h1></td>
</tr><center>
 
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center' style="background-color:#FFFFFF ">
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Name:</td>
    <td><input type='text' name='name' placeholder="your name" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" required="required"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Phone number:</td>
    <td><input type='tel' name='phone' placeholder="Phone No." required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Mail id:</td>
    <td><input type='email' name='mail' required="yes" placeholder="Email" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr> <td style="background-color:#FFFFFF;">&nbsp;</td> </tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Gender:</td>
    <td style="background-color:#FFFFFF;"> <input type="radio" name="gender" value="male" >male<br><input type="radio" name="gender" value="female">female<br></td>
</tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Birthdate:</td>
    <td style="background-color:#FFFFFF;"><input type="date" name="bdate"  required></td>
</tr>
<tr> <td style="background-color:#FFFFFF;">&nbsp;</td> </tr>
</tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Blood group:</td>
    <td style="background-color:#FFFFFF;"><select name="bg"><option>-Your bloodgroup-</option><option>A+</option><option>A-</option><option>B+</option><option>B-</option><option>AB+</option><option>AB-</option><option>O+</option><option>O-</option></select></td>
</tr>
<tr> <td style="background-color:#FFFFFF;">&nbsp;</td> </tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >City:</td>
    <td style="background-color:#FFFFFF;"><select name="city"><option>-Your City-</option><option>Ahmedabad</option><option>Surat</option><option>Banaskantha</option><option>Vadodara</option><option>Porbandar</option><option>Jamnagar</option></select></td>
</tr>
<tr> <td style="background-color:#FFFFFF;">&nbsp;</td> </tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Address:</td>
    <td style="background-color:#FFFFFF;"> <input type="text" name="ad" placeholder="Address" required></td>
</tr>
<td style="background-color:#FFFFFF;">&nbsp;</td> </tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >blood request pic:</td>
    <td><input type="file" name="file"></td>
</tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Capcha:</td>
    <td style="background-color:#FFFFFF;" ><input type="text" name="cap" />
<img src="capcha.php" />
</td>
</tr>


<tr> <td style="background-color:#FFFFFF;" >&nbsp;</td> </tr>
<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center'><input type='submit' name='chek' value="REGISTER" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black"> </td>
</tr>
</table>
	 </form>
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
       
        <form method="post" action="fb.php">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" name="name"  placeholder="Name">
            <input class="btmspace-15" type="text" name="mail" placeholder="Email">
			<input class="btmspace-15" type="text"  name="msg" placeholder="message">
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
<marquee behavior = "alternate" scrolldelay="200" scrollamount="3" style="width:970px;">रक्तदान कीजिए, शिविर लगाइये, आपका खून किसी की जान बचा सकता है ||  आप रक्त दान करें और अपना जीवन महान बनाए || रक्तदान महादान ||
</marquee>
</body>
</html>