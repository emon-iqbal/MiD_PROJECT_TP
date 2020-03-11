<?php

session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Image</title>
</head>
<body>

	<center>
		<img src="TP_DS.png" width="250px" height="200px"/>
		<br>
		<a href="tp_Profile.php">B  A  C  K</a>	
	</center>


	
</body>
</html>