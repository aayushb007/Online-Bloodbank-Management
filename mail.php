<?php
mysqli_connect("localhost","root","");
mysqli_select_db("test");
$email=$_REQUEST["email"];
$query=mysqli_query("select * from register4 where email='$email'");
$row=mysqli_fetch_array($query);
echo $row["email"];
echo $row["pass"];

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "patelakshay43751@gmail.com";
  $mail->Password = "patelakshay43751@8085";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "patelakshay43751@gmail.com";
  $mail->FromName = "akshay";
  
  $mail->addAddress($row["email"]);
  
  $mail->isHTML(true);
 
  $mail->Subject = "test mail";
  $mail->Body = "<i>this is your password:</i>".$row["pass"];
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   echo "Message has been sent successfully";
  }
 ?>