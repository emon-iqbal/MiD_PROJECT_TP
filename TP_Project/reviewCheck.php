<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
	$tper = $_REQUEST['tper'];
	$sper = $_REQUEST['sper'];
		
		if(empty(trim($tper)) || empty(trim($sper))){
			echo "Null submission found!";
		}else{
        header("location: ReviewApproval.php");
		}
	}
?>