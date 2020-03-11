<?php	
	session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Request added to Admins notification area. ~~Regards~~</br>
<a href="dashboard.php">HOME</a></br>

</body>
</html>