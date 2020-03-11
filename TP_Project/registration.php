<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION_page</title>
</head>
<body>
	
	<form method="POST" action="regCheck.php">
	<fieldset>
		<legend><center><h2>REGISTRATION</h2></center></legend>
			<b>User_Name</b></br><input type="text" name="uname" value=""></br>
			
			<b>EmaiL</b></br><input type="text" name="uemail" value=""></br>
			
			<td><b>Password</b></td></br>
			<td><input type="password" name="password" value="" /></td></br>
			
			<b>Confirm Password</b></br><input type="password" name="mpassword" value=""></br>
			
			<b>Gender>>:</b> 
				<input type="radio" name="ugender" value="MaLe"  required/>MaLe
				<input type="radio" name="ugender" value="FeMaLe" />FeMaLe
				<input type="radio" name="ugender" value="Others" />No Idea </br>______________________________</br>
							  
			</br>
			<td>
				<input type="submit" name="submit" value="REGISTER"> <a href="login.php"><b/>Login</a>
			</td>
			
	</fieldset>
	</form>
</body>
</html>