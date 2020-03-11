<?php
	session_start();
	
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
		
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tutor_Details</title>
</head>
<body>
<form>

<table border="5" width="1300px">
 		<tr>
			<td>
			<center><h1><b>TuTor_Profile</b></h1></center>
			</td>
		</tr>
</table>
</br>

<center/><table border="3" width="900px">
	<tr>
		<td colspan="2">
	<table border="1" width="400px"> 
 		<tr>
				<td colspan="2"><center><h2><b>MaLin is here!!</b></h2></center></td>
		</tr>
		
		<tr>
				<td><b/><center>ID</center></td>
				<td><b/>20-001-1</td>
		</tr>
		
		<tr>
				<td><b/><center>NAME</center></td>
				<td>MaLin</td>
		</tr>
		
		<tr>
				<td><b/><center/>Academic Status</td>
				<td>MSc.IT, AIUB</td>
		</tr>
		
		<tr>
				<td><b/><center/>Degree</td>
				<td>
				<input type="checkbox" name="completed">SSC
				<input type="checkbox" name="completed">HSC
				<input type="checkbox" name="completed">BSc
				<input type="checkbox" name="studying">MSc
				</td>
		</tr>
		
		<tr>
				<td><b/><center/>Gender </td>
				<td>  
					<input type="radio" name="gender" value="select">Female
				</td>
		</tr>
			
		<tr>
				<td><b/><center/>BG</td>
				<td>
					<select>
						<option>A -</option>
						<option>B+</option>
						<option>A+</option>
						<option>B-</option>
						<option>AB+</option>
						<option>AB-</option>
						<option>O+</option>
						<option>O-</option>
					</select>
				</td>
		</tr>
		
		<tr>	
				<td><b/><center/>Living Area</td>
				<td>FarmGate</td>
		</tr>
		
		
		<tr>
				<td colspan="2"><center><a href="dashboard.php">HOME</a></center></td>
		</tr>
		
	</table>
		</td>
		<td>
		
			<div align="right"><table border="1" width="400px">
 		<tr>
				<td colspan="2"><center><h2><b>KanE for you!!</b></h2></center></td>
		</tr>
		
		<tr>
				<td><b/><center>ID</center></td>
				<td><b/>20-004-3</td>
		</tr>
		
		<tr>
				<td><b/><center>NAME</center></td>
				<td>KANE</td>
		</tr>
		
		<tr>
				<td><b/><center/>Academic Status</td>
				<td>BSc.EEE, MIUST</td>
		</tr>
		
		<tr>
				<td><b/><center/>Degree</td>
				<td>
				<input type="checkbox" name="completed">SSC
				<input type="checkbox" name="completed">HSC
				<input type="checkbox" name="completed">BSc
				</td>
		</tr>
		
		<tr>
				<td><b/><center/>Gender </td>
				<td>  
					<input type="radio" name="gender" value="select">MaLe
				</td>
		</tr>
			
		<tr>
				<td><b/><center/>BG</td>
				<td>
					<select>
						<option>O +</option>
						<option>B +</option>
						<option>A +</option>
						<option>B -</option>
						<option>AB +</option>
						<option>AB -</option>
						<option>A -</option>
						<option>O -</option>
					</select>
				</td>
		</tr>
		
		<tr>	
				<td><b/><center/>Living Area</td>
				<td>GULSHAN</td>
		</tr>
		
		
		<tr>
				<td colspan="2"><center><a href="dashboard.php">HOME</a></center></td>
		</tr>
		
	</table></div>
		</td>
		
	</tr>
	
</table>
</form>
</body>
</html>