

<?php
if(isset($_POST["sbmt"])) 
{

	
	$cn=mysqli_connect("localhost","root","","bb");;			

		$s="insert into fb(name,email,msg) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('feedback successfully  Save');</script>";
	}
	else
	{echo "<script>alert('Saving feedback Failed');</script>";
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include_once('header.php') ?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image: url(images/bright-cardiac-cardiology-433267.jpg)">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <p>Give blood save life</p>
            <h3 class="heading">LIFE@ONE TOUCH</h3>
            <p>YOU CAN DONATE BLOOD AND SAVES MANY LIVES</p>
            <footer>
              <ul class="nospace inline pushright">
                <li><a class="btn" href="reg2.php">REGISTER</a></li>
                <li><a class="btn inverse" href="fd.php">FIND DONOR</a></li>
              </ul>
            </footer>
          </article>
        </li>
        <li>
          <article>
            <p>SHARE AND CARE A LITTLE-DONATE BLOOD</p>
            <h3 class="heading">DONATE BLOOD</h3>
            <footer>
              <ul class="nospace inline pushright">
               <li><a class="btn" href="reg2.html">REGISTER</a></li>
                <li><a class="btn inverse" href="fd.php">FIND DONOR</a></li> 
              </ul>
            </footer>
          </article>
        </li>
        <li>
          <article>
          
            <h3 class="heading">save life</h3>
            <p>makes your health good</p>
            <footer>
              <ul class="nospace inline pushright">
          <li><a class="btn" href="">PATIENT REGISTER </a></li>
                <li><a class="btn inverse" href="fd.php">FIND DONOR</a></li>
              </ul>
            </footer>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper splitclrs">
  <div class="split clear">
    <div> 
      <!-- ################################################################################################ -->
      <img src="images/abot12.png" width="397" height="188">
      <!-- ################################################################################################ -->
    </div>
    <div> 
      <!-- ################################################################################################ -->
      <p class="nospace font-xs"></p>
      <h3 class="heading">Why donate blood?</h3>
      <p>Blood is the part of life that is given to those who need it by those who have the resource to satisfy the need. The love of fellow human and a desire to share something of oneself is what singles out a blood donor from the others. Emergencies occur every minute. For each patient requiring blood, it is an emergency and the patients could have set back if blood is not available.
    Your blood donation may be even more special than you realize A single donation from you can help one or more patients. This is possible because whole blood is made up of several useful components. These components perform special functions in your body and in the body of patients who receive your blood.
</p>
      <blockquote>Various blood components are Red Blood Cells, White Blood Cells, Platelets, Plasma and selected Plasma Proteins. Each of these components can be separated from your donated volume of blood and transfused into a specific patient requiring that particular component. Thus, many can benefit from one unit of blood. Every year India requires 40 million units of 250cc blood out of which only a meager 500,000 of blood units are available.</blockquote>
      <p></p>
      <footer><a class="btn" href="howtodonate.php">Read More &raquo;</a></footer>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <marquee style="background-color:#FFFFFF; border-bottom-color:#FFFFFF"><font size="5" font style="italic; border-bottom-color:#FFFFFF"><font color="red">BLOOD DONATE MAKE YOUR LIFE HEALTHY.</font></font></marquee>

</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle center">
      <h6 class="heading">CAMPS AND HOSPITALS</h6>
      <p></p>
    </div>
    <div class="posts">
      <figure class="group">
        <div><img src="images.jpg" alt="this content not displyed"></div>
        <figcaption>
          <h6 class="heading">Connect Hospitals</h6>
          <p>connect all certified hospitals that can request for blood and organize blood bank camps [&hellip;]</p>
          <footer><a class="btn" href="connecthospital.php">Read More &raquo;</a></footer>
        </figcaption>
      </figure>
      <!-- ################################################################################################ -->
      <figure class="group">
        <div><img src="Admin/images/slider8.jpg" alt=""></div>
        <figcaption>
          <h6 class="heading">blood bank CAMPS </h6>
          <p>all blood bank camps are listed [&hellip;]</p>
          <footer><a class="btn" href="camps.php">Read More &raquo;</a></footer>
        </figcaption>
      </figure>
    </div>
	<br><br>
    <!-- ################################################################################################ -->
	 <figure class="group">
        <div><img src="images/bb.jpg" alt="this content not displyed"></div>
        <figcaption>
          <h6 class="heading">Blood Donation is safe?</h6>
          <p> 
Blood donation is safe. New, sterile disposable equipment is used for each donor, so there's no risk of contracting a bloodborne infection by donating blood. If you're a healthy adult, you can usually donate a pint of blood without endangering your health[&hellip;]</p>
          <footer></footer>
        </figcaption>
      </figure>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include_once('footer.php') ?>
<marquee behavior= "alternate" scrolldelay="200" scrollamount="3" style="width:1000px;">रक्तदान कीजिए, शिविर लगाइये, आपका खून किसी की जान बचा सकता है ||  आप रक्त दान करें और अपना जीवन महान बनाए || रक्तदान महादान ||
</marquee>
</body>
</html>