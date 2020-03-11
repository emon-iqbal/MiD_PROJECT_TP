<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$uname = $_REQUEST['uname'];
		$password =  $_REQUEST['password'];
		
		if(empty(trim($uname)) || empty(trim($password))){
			echo "Null submission found!";
		}else{

			$file = fopen('login_setup.txt', 'r');
			$user = fread($file, filesize('login_setup.txt'));
			$data = explode('~~', $user);

			if( trim($data[0]) == $uname && trim($data[1]) == $password){
				setcookie('username', $uname, time()+3600, '/');

				header("location: dashboard.php");
			}else{
				echo "invalid uname/password";
			}
		}

	}else{
		//echo "invalid request! please login first!";
		header("location: login.php");
	}
?>