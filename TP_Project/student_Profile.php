<?php
	session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
		
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>StudenT_Profile_Page</title>
</head>
<body>
	
<form method="POST" action="stpCheck.php">

</br>
</br>
<center/><table border="1" width="600px">
 		<tr>
				<td colspan="2"><center><h2><b>STudenT InFo</b></h2></center>
		</tr>
		
		<tr>
				<td><b/><center>ID</center></td>
				<td><input type="text" name="sid" value="20-001"></td>
		</tr>
		
		<tr>
				<td><b/><center>NAME</center></td>
				<td><input type="text" name="sname" value="Sarina Mehmud"></td>
		</tr>
		
		<tr>
				<td><b/><center/>Gender </td>
				<td> 
					<input type="radio" name="sgendr" value="select">MaLe
					<input type="radio" name="sgendr" value="select">FEmaLe
				</td>
		</tr>
		
		<tr>
				<td><b/><center/>ONGOING CAMPUS </td>
				<td><input type="text" size="50px" name="sinst" value="Adamjee Cantonment Public School"></td>
		</tr>
		
		<tr>
				<td><b/><center/>ONGOING LeveL </td>
				<td>
					<select>
						<option input type="text" name="sclss" value="CLASS">9</option>
						<option input type="text" name="sclss" value="CLASS">8</option>
						<option input type="text" name="sclss" value="CLASS">7</option>
						<option input type="text" name="sclss" value="CLASS">6</option>
						<option input type="text" name="sclss" value="CLASS">5</option>
						<option input type="text" name="sclss" value="CLASS">4</option>
						<option input type="text" name="sclss" value="CLASS">3</option>
						<option input type="text" name="sclss" value="CLASS">2</option>
						<option input type="text" name="sclss" value="CLASS">1</option>
						<option input type="text" name="sclss" value="CLASS">pre1</option>
						<option input type="text" name="sclss" value="CLASS">mid1</option>
						<option input type="text" name="sclss" value="CLASS">baby</option>
					</select>
				</td>
		</tr>
		
		<tr>
				<td><b/><center/>BG</td>
				<td>
					<select>
						<option input type="text" name="sbg" value="">A+</option>
						<option input type="text" name="sbg" value="">B+</option>
						<option input type="text" name="sbg" value="">A-</option>
						<option input type="text" name="sbg" value="">B-</option>
						<option input type="text" name="sbg" value="">AB+</option>
						<option input type="text" name="sbg" value="">AB-</option>
						<option input type="text" name="sbg" value="">O+</option>
						<option input type="text" name="sbg" value="">O-</option>
					</select>
				</td>
		</tr>
		
		<tr>	
				<td><b/><center/>Living Address</td>
				<td><input type="text" name="sads" value="Baridhara"></td>
		</tr>
		
		<tr>	
				<td><b/><center/>ATTACH FILES</td>
				<td><div align="center"><input type="file" name="addtranscripts" value="browse"></div></td>
		</tr>
		
		<tr>
				<td colspan="2">
				</br>
				<div align="left"><b/><input type="submit" name="submit" value="PROCEED"></div>
				</br>
				<div align="center"><a href="student_Schedules.php">T I M E L I N E</div>
				<div align="center"><a href="dashboard.php">H  O  M  E</a></div>
				
				</td>
		</tr>
		
	</table>
	
	</form>
</body>
</html>