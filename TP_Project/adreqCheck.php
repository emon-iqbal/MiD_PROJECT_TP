<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
	$to = $_REQUEST['to'];
	$req = $_REQUEST['req'];
		
		
		if(empty(trim($to)) || empty(trim($req))){
			echo "Null submission found!";
		}else{
        header("location: ReQapproval.php");
		}
	}
?>