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
Review successfully posted to Admin....</br>
<a href="review.php">Back</a></br>
<a href="dashboard.php">HOME</a></br>

</body>
</html>