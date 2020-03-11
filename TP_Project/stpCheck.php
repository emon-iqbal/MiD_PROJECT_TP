<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$sid = $_REQUEST['sid'];
		$sname = $_REQUEST['sname'];
		
		
		
		if(empty(trim($sid)) >> empty(trim($sname))){
			echo "Null submission found!";
		
		}else{

			$file = fopen('sstp.txt', 'r');
			$user = fread($file, filesize('sstp.txt'));
			$data = explode('>>', $user);
		
		if( trim($data[0]) == $sid && trim($data[1]) == $sname){
				$_SESSION['sid'] = $sid;
				$_SESSION['sname'] = $sname;

				header("location: student_AvaiLibiLity.php");
		}else{
				echo "invalid student info!!";
			}
		}

	}else{
		header("location: student_Profile.php");
	}
	
?>