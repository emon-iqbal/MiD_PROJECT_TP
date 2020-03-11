<?php
	session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>TuToRs Availability</title>
</head>
<body>
<form>
</br>
</br>
<table border="1" width="400px">
 		<tr>
				<td colspan="3"><center><h2/><b/>TuToRs AvaiLabiLity</center>
		</tr>
		
		<tr>
				<td><center><h3><b/>ID</h3></center></td>
				<td><center><h3><b/>N A M E</h3></center></td>
				<td><center><h3><b/>S T A T U S</h3></center></td>
		</tr>
		<tr>
				<td><center><b/>20-001-1</center></td>
				<td><center><a href="tutor_Details.php">MaLin</a></center></td>
				<td><center>AvaiLabLe</center></td>
		</tr>
		
		<tr>
				<td><center><b/>20-020-2</center></td>
				<td><center>CareY</center></td>
				<td><center>AvaiLabLe</center></td>
		</tr>
		
		<tr>
				<td><center><b/>20-007-2</center></td>
				<td><center><a href="statusOfTutors.txt">RaTuL</a></center></td>
				<td><center>UnAvaiLabLe</center></td>
		</tr>
		
		<tr>
				<td><center><b/>19-010-1</center></td>
				<td><center><a href="statusOfTutors.txt">DereK</a></center></td>
				<td><center>UnAvaiLabLe</center></td>
		</tr>
		
		<tr>
				<td><center><b/>20-004-3</center></td>
				<td><center><a href="tutor_Details.php">KanE</a></center></td>
				<td><center>AvaiLabLe</center></td>
		</tr>
		
		<tr>
				<td><center><b/>20-017-2</center></td>
				<td><center>EroZ</center></td>
				<td><center>AvaiLabLe</center></td>
		</tr>
		
		<tr>
				<td><center><b/>20-040-1</center></td>
				<td><center>MehraN</center></td>
				<td><center>AvaiLabLe</center></td>
		</tr>

		<tr>
			<a href="offered_Tuition.php">New Tutor</a></tr>
		<tr>
				<td colspan="3"><center><a href="dashboard.php">H O M E</a></center></td>
		</tr>
	</table>
	</form>
</body>
</html>