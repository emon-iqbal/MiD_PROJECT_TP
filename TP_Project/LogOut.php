<?php
	session_start();
	
	setcookie('username', '', time()-10, '/');
	header("location: login.php");

?>