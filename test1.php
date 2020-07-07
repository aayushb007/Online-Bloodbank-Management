<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="te.php" method="POST"  style="background-color: #FFFFFF">

  
 
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center' style="background-color:#FFFFFF ">
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Your Name:</td>
    <td><input type='text' name='name' placeholder="your name" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" required="required"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Your bloodbank id:</td>
    <td><input type='text' name='bid' placeholder="your bloodbank id"  title="please enter only character  between 4 to 15 for donor name" required="required"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Your Phone number:</td>
    <td><input type='tel' name='phone' placeholder="Phone No." required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Mail id:</td>
    <td><input type='email' name='mail' required="yes" placeholder="Email" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Password:</td>
    <td ><input  type='password'  name='pwd' placeholder="Password"  pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 12 to 18 for password" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >Confirm Password:</td>
    <td style="background-color:#FFFFFF;"><input type='password' name='cpwd' placeholder="Password"  pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 12 to 18 for password" required></td>
</tr>
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
    <td align='right' style="background-color:#FFFFFF; color:#000000 " >upload pic:</td>
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


	</table>
</form>
</body>
</html>