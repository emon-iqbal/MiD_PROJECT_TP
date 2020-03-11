<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
	$acall = $_REQUEST['acall'];
	$tcall = $_REQUEST['tcall'];
	$scall = $_REQUEST['scall'];
		
		
		if(empty(trim($acall)) || empty(trim($tcall)) || empty(trim($scall))){
			echo "Null submission found!";
		}else{
        header("location: dashboard.php");
		}
	}
?>