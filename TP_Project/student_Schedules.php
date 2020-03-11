<?php
	session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
		
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>STUDENT_SCHEDULE</title>
</head>
<body>
<form>

<table border="1" width="1100px">
 		<tr>
				<td colspan="3"><center><h2/><b/>S C H E D U L E S for students</center></td>
		</tr>
		
		<tr>
				<td><center><h3><b/>ID</h3></center></td>
				<td><center><h3><b/>N A M E</h3></center></td>
				<td><center><h3><b/>TIME _ DAY</h3></center></td>
		</tr>
		
		<tr>
				<td><center>20-001</center></td>
				<td><center><a href="student_Profile.php">Sarina</a></center></td>
				<td><center>7 pm - 10 pm_ SATURDAY,MONDAY,WEDNESDAY,FRIDAY</center></td>
		</tr>
		
		<tr>
				<td><center>20-020</center></td>
				<td><center><a href="student_Profile.php">Sajib</center></td>
				<td><center>6 pm - 8:30 pm _ SUNDAY,TUESDAY,THURSDAY </center></td>
		</tr>
		
		<tr>
				<td><center>20-007</center></td>
				<td><center><a href="student_Profile.php">RaTiN</a></center></td>
				<td><center>8 pm - 10 pm _ SUNDAY,MONDAY,FRIDAY</center></td>
		</tr>
		
		<tr>
				<td><center>20-004</center></td>
				<td><center><a href="student_Profile.php">Kashfia</a></center></td>
				<td><center>6:30 pm - 9 pm _ SUNDAY,TUESDAY,SATURDAY</center></td>
		</tr>
		
		<tr>
				<td><center>20-011</center></td>
				<td><center><a href="student_Profile.php">ASH</a></center></td>
				<td><center>7 pm - 11 pm _ THURSDAY,FRIDAY,SUNDAY</center></td>
		</tr>
		
		<tr>
				<td colspan="3"><center><a href="dashboard.php">H O M E</a></center></td>
		</tr>
	</table>
	</form>
</body>
</html>