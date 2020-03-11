<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>REVIEW/FEEDBACK TO ADMIN</title>
</head>
<body>
<form method="POST" action="reviewCheck.php">
<fieldset>
		<legend><h1>REVIEW or FEEDBACK</h1></legend>
			<b>Teachers Performance:</b><input type="radio" name="tper" value="*" required/>*
										 <input type="radio" name="tper" value="**" />**
										 <input type="radio" name="tper" value="***" />***
										 <input type="radio" name="tper" value="****" />****
										 <input type="radio" name="tper" value="****" />*****
										 <br/></br>
			<b>Students Performance: </b><input type="radio" name="sper" value="*" required/>*
										 <input type="radio" name="sper" value="**" />**
										 <input type="radio" name="sper" value="***" />***
										 <input type="radio" name="sper" value="****" />****
										 <input type="radio" name="sper" value="****" />*****<br/>
								____________________________________________________________</br>[* represents least and ***** represents best performances]</br>__________________________________</br>
			
		
			<input type="submit" name="submit" value="Submit">
			
			<a href="dashboard.php">HOME</a>

</fieldset>
</body>
</html>