<?php
	session_start();
	
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
		
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Availability</title>
</head>
<body>
</br>
</br>
<table border="1" width="400px">
 		<tr>
				<td colspan="3"><center><h2/><b/>Student AvaiLabiLity</center>
		</tr>
		
		<tr>
				<td><center><h3><b/>ID</h3></center></td>
				<td><center><h3><b/>N A M E</h3></center></td>
			
		</tr>
		<tr>
				<td><center><b/>20-001</center></td>
				<td><center><a href="student_Profile.php">Sarina</a></center></td>
		</tr>
		
		<tr>
				<td><center><b/>20-020</center></td>
				<td><center>Sajib</center></td>
		</tr>
		
		<tr>
				<td><center><b/>20-007</center></td>
				<td><center><a href="student_Profile.php">JaKe</a></center></td>
		</tr>
		
		<tr>
				<td><center><b/>20-010</center></td>
				<td><center><a href="student_Profile.php">Ash</a></center></td>
		</tr>
		
		<tr>
				<td><center><b/>20-004</center></td>
				<td><center>MiFtah</a></center></td>
		</tr>
		
		<tr>
				<td><center><b/>20-017</center></td>
				<td><center>Maliha</a></center></td>
		</tr>
		
		<tr>
				<td><center><b/>20-040</center></td>
				<td><center>Ihram</a></center></td>
		</tr>
		
		<tr>
			<a href="offered_Tuition.php">New student</a></tr>
		<tr>
		
		
		<tr>
				<td><div align="left"><a href="student_Profile.php">B A C K</div></td>
				<td colspan="3"><center><a href="dashboard.php">H O M E</a></center></td>
		</tr>
	</table>
	</form>
</body>
</html>