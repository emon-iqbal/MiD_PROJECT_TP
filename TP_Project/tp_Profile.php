<?php
	session_start();
	
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
		
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tution_PROVIDER_Profile_Page</title>
</head>
<body>
<form>

</br>
</br>
<center/><table border="1" width="400px">
 		<tr>
				<td colspan="2"><center><h2><b>TP_Profile</b></h2></center>
		</tr>
		
		<tr>
				<td><b/><center>ID</center></td>
				<td><b/>20-004</td>
		</tr>
		
		<tr>
				<td><b/><center>NAME</center></td>
				<td>EMON,RASEL IQBAL</td>
		</tr>
		
		<tr>
				<td><b/><center/>Email</td>
				<td>rasjbii@gmail.com</td>
		</tr>
		
		<tr>
				<td><b/><center/>Gender </td>
				<td> 
					<input type="radio" name="gender" value="MaLe" required/>Male 
		
				</td>
		</tr>
		
		<tr>
				<td><b/><center/>DOB</td>
				<td>20-11-1996</td>
				
				
		</tr>
		
		<tr>
				<td><b/><center/>BG</td>
				<td>
					<select>
						<option>A+</option>
						<option>B+</option>
						<option>A-</option>
						<option>B-</option>
						<option>AB+</option>
						<option>AB-</option>
						<option>O+</option>
						<option>O-</option>

					</select>
				</td>
		</tr>
		
		<tr>	
				<td><b/><center/>Living Address</td>
				<td>ESKATON GARDEN,RAMNA-1000</td>
		</tr>
		
		<tr>	
				<td><b/><center/>PHOTO</td>
				<td><a href="tp_Photo.php">CLICK</a></td>
		</tr>
		
		<tr>
				<td colspan="2"><center><a href="dashboard.php">Home</a></center></td>
		</tr>
		
	</table>
	</form>
</body>
</html>