<?php
	session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
		
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>TuToRs SCHEDULE</title>
</head>
<body>
<form>

<table border="1" width="900px">
 		<tr>
				<td colspan="3"><center><h2/><b/>S C H E D U L E S</center></td>
		</tr>
		
		<tr>
				<td><center><h3><b/>ID</h3></center></td>
				<td><center><h3><b/>N A M E</h3></center></td>
				<td><center><h3><b/>TIME _ DAY</h3></center></td>
		</tr>
		
		<tr>
				<td><center>20-001-1</center></td>
				<td><center><a href="tutor_Details.php">MaLin</a></center></td>
				<td><center>6:30 pm _ SATURDAY,MONDAY,WEDNESDAY</center></td>
		</tr>
		
		<tr>
				<td><center>20-020-2</center></td>
				<td><center>CareY</center></td>
				<td><center>7 pm _ SATURDAY,TUESDAY,THURSDAY </center></td>
		</tr>
		
		<tr>
				<td><center>20-007-2</center></td>
				<td><center><a href="statusOfTutors.txt">RaTuL</a></center></td>
				<td><center>5 pm - 10 pm _ SUNDAY,MONDAY,WEDNESDAY,FRIDAY</center></td>
		</tr>
		
		<tr>
				<td><center>20-004-3</center></td>
				<td><center><a href="tutor_Details.php">KanE</a></center></td>
				<td><center>8 pm _ SUNDAY,TUESDAY,FRIDAY</center></td>
		</tr>
		
		<tr>
				<td colspan="3"><center><a href="dashboard.php">H O M E</a></center></td>
		</tr>
	</table>
	</form>
</body>
</html>