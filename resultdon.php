<!DOCTYPE html>
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
<br><br><br><br>
<div class="wrapper row3">
  <main class="hoc container clear">
<div style=" height:auto">

     <form method="post" enctype="multipart/form-data">
      <table cellpadding="0" cellspacing="0" width="1100px" style="margin:auto">
  <tr>            
            <td>
            
            
            
  <table cellpadding="0" cellspacing="0" width="800px" height="100px" style="margin:auto; border:0px" class="tableborder">
        <tr><th  align="center">RESULT OF SEARCH DONOR</th></tr>
        <tr><td >&nbsp;</td></tr> 
          
            <?php
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from donarregistration,bloodgroup where donarregistration.b_id='". $_REQUEST["bg"]."' and donarregistration.b_id=bloodgroup.bg_id";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
?>
  <tr><td  >

            <table cellpadding="0" cellspacing="0" width="700px" height="150px" style="margin:auto; border:none;" class="tableborder">


                <tr><td width="120px"  align="center" style="vertical-align:middle">

 <a href="doner_pic<?php echo $data[8] ?>"data-lightbox="image-1"> <img src="doner_pic/<?php echo $data[8] ?>" height="200px" width="200px" style="margin:auto; padding-left:70px; padding-right:60px; float:left" /></a></td>


                    <td width="500px" height="50px" style="vertical-align:top">
                        

                        <table cellpadding="0" width="500px" height="150px" style="border:none">
           <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><span class="title">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td><td><?php echo $data[1]; ?></td><td align="left" width="50%"></td></tr>
                 <tr><td><span class="title">Gender</span></td><td><?php echo $data[2]; ?></td></tr>
                  <tr><td style="width:24px"><span class="title">Mobile No:</span></td><td><?php echo $data[4]; ?></td></tr>
                  <tr><td><span class="title">Email</span></td><td><?php echo $data[6]; ?></td></tr>
                   

                     
                     
                     
                      </table>

                    </td></tr></table></td></tr>
               
   <?php }
   ?>
           </table></td></tr></table></form>


		
</form>
 </main>
</div>

<br><br><br><br><br><br><br><br><br>
<!-- ################################################################################################ -->
<?php include_once('footer.php') ?>
</body>

</html>


