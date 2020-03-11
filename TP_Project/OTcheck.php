<?php
	
	session_start();
	
	if( isset($_REQUEST['submit'])){
		
		$nid =  $_POST['nid'];
		$nname =  $_POST['nname'].'~';
		

		$length=strlen($nname);
		$a=0;

	
	if(isset($_POST['nid']))
	{
		$nid=$_POST['nid'];
		$length=strlen($nid);
	if($length>=2 && is_numeric($nid)==true)
	{
		$nid=$_POST['nid'].'~';
		$a=$a+1;
	}
	else
	{
		echo("Null Submission of ID</br>");
	}
	
	
	}else
	{
		echo("Please Fill the ID for the completion of this page");
	}
	
	
	
	if(isset($_POST['nname']))
	{
		$a=$a+1;
	}else
	{
		echo("SeLecT NaMe");
	}
	
		
	if(isset($_POST['nname']))
	{
		$nname=$_POST['nname'];
		$length=strlen($nname);
	if($length>=2 && is_numeric($nname)==false)
	{
		$nname=$_POST['nname'].PHP_EOL;
		$a=$a+1;
	}
	else
	{
		echo("Null Submission of Name</br>");
	}
	
	
	}else
	{
		echo("Please Fill the Name up for the completion of this page");
	}	
		
		
	if($a>2)
	{
	$file=fopen('ntsl.txt','a'.PHP_EOL);
	
	
	fwrite($file,$nid);
	fwrite($file,$nname);

	
	fclose($file);	
		
		header("location: dashboard.php");
	}
	}
	
?>