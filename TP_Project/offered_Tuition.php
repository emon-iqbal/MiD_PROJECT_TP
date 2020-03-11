<?php
	session_start();
	
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
		
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>New Tution List</title>
</head>
<body>
<form method="POST" action="OTcheck.php">
</br>
</br>
</br>
<center/><table border="1" width="700px" height="300px">
 		<tr>
				<td colspan="2"><center><h2><b>New TuiTions to Provide</b></h2></center>
		</tr>
		
		<tr>
			<td>
			<h3><b>New Tutor/student: </b></h3>
			<b>ID:</b> <input type="number" name="nid" value="">
			<b>  -----||  NAME:</b> <input type="text" name="nname" value=""></br>
			<b>User Type :</b> 
					<input type="radio" name="ntype" value="teacher"  required>TEACHER
					<input type="radio" name="ntype" value="student" />STUDENT</br></br>
					
			<input type="submit" name="submit" value="UPDATE"></br></br>
			<b>Add To Teachers/student List: <a href="available_Tutors.php">Teacher List</a>  <a href="student_AvaiLibiLiTy.php">STUDENTS List</a>
									
			</td>		
		</tr>
		
		<tr>
				<td colspan="2"><center><a href="dashboard.php">HOME</a></center></td>
		</tr>
		
	</table>
	</form>
</body>
</html>