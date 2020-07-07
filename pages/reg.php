
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="c.php" method="POST">

   NAME:	<input type="text" name="name" ><br>
   MOBILE:	<input type="tel" name="mobile" ><br>
   EMAIL:	<input type="email" name="mail" ><br>
   GENDER:<br><input type="radio" name="GENDER" value="male">male<br><input type="radio" name="GENDER" value="female">female<br>
   PASSWORD:<input type="password" name="pwd" ><br>
   LANGUAGE:<br><input type="checkbox" name="lang[]" value="english">english<br><input type="checkbox"  name="lang[]" value="gujarati">gujarati<br><input type="checkbox" name="lang[]" value="marathi">marathi<br><input type="checkbox"  name="lang[]" value="hindi">hindi
  <br>hobby: <select name="hobby">
   
   	<option value="sport">sports</option>
   		<option value="study">study</option>
   			<option value="gaming">gaming</option>
   				<option value="cook">cooking</option>
   					
   </select>
    <br> <input type="submit" name="register" value="Register">
	 </form>

</body>
</html>