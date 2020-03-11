<?php
	session_start();	  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login_page</title>
</head>
<body>

	<h1>
		<?php if(isset($_SESSION['pass'])) ?>
	</h1>
	<form method="POST" action="logCheck.php">
	<fieldset>
		<legend><h2><b>LOGIN</b></h2></legend>
			<b>User_Name</b></br><input type="text" name="uname" value=""></br>
			<b>Password</b></br><input type="password" name="password" value=""/></br>______________</br>
			<td>
				</br><input type="submit" name="submit" value="Login"> <a href="registration.php">Register</a>	
			</td>
	</fieldset>
	</form>
</body>
</html>