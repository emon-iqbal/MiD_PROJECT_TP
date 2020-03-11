<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Send ANY SORT OF REQUEST TO ADMIN</title>
</head>
<body>
<form method="POST" action="adreqCheck.php">
<fieldset>
		<legend><h1>Comments to Admin</h1></legend>
			<b>To: </b><input type="text" name="to" value=""><br/><br/>
			<b>Request: </b><input type="text" name="req" value=""><br/><br/>
			<input type="submit" name="submit" value="Submit">
			
			<a href="dashboard.php">HOME</a>


</fieldset>
</body>
</html>