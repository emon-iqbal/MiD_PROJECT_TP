<?php	
	session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}	
?>


<!DOCTYPE html>
<html>
<head>
	<title>TP_Home page</title>
</head>
<body>
<form><center>

<table border="6" width="900px">
 		<tr>
 			<td>
			<center><h1><b> D A S H B O A R D </b></h1></center></br>
			<h3>Welcome home! <?= $_COOKIE['username']?></h3>
			</td>
		</tr>
		
		<tr height="70px">
			<td>
			<center><h3><a href="tp_Profile.php">TUTION PROVIDER PROFILE</a></h3></center>
			<h5><a href="offered_Tuition.php">OFFERED TUTIONS</a></h5> 
			<center><h5><a href="available_Tutors.php">AVAILABLE TUTORS</a></h5></center>
			<div align="right"><h5><a href="tutor_Details.php">TUTOR PROFILE</a></h5></div>
			<h5><a href="tutor_Schedules.php">TUTOR SCHEDULES</a></h5>
			<center><h5><a href="student_Profile.php">STUDENT INFO</a></h5></center>
			<div align="right"><h5><a href="student_AvaiLibiLiTy.php">STUDENTS AVAILABILITY</a></h5></div>
			<h5><a href="student_Schedules.php">STUDENTS SCHEDULE</a></h5>
			<center><h5><a href="tutor_Details.php">REQUIREMENTS OF STUDENTS</a></h5></center>
			<div align="right"><h5><a href="conTacT.php">CONTACT ARENA</a></h5></div>
			<h5><a href="review.php">REVIEW OF TUTIONS</a></h5>
			<center><h3><a href="LogOut.php"><b>L O G O U T</b></a></h3></center>
			<div align="right"><h5><a href="reqtoadmin.php">REQUESTS TO ADMIN</a></h5></div>
			
			</td>
 		</tr>
 		
	</table>
	</center>
	</form>
</body>
</html>
