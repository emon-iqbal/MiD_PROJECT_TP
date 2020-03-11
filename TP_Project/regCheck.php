<?php
	
	session_start();
	if( isset($_REQUEST['submit'])){
		
		$uname =  $_POST['uname'].'~';
		$password =  $_POST['password'];
		$mpassword =  $_POST['mpassword'];
		$uemail =  $_POST['uemail'];


		$length=strlen($uname);
		$a=0;

	if(isset($_POST['uname']))
	{
		$a=$a+1;
	}else
	{
		echo("SeLecT NaMe");
	}

		
	if(isset($_POST['password']))
	{
		$password=$_POST['password'].'~';
		$plength=strlen($password);
	if($plength>6)
	{
		$a=$a+1;
	}else
	{
		echo("Null Password</br>");
	}
	
	
	}else
	{
		echo("password should be filled up anyways");
	}






	if(isset($_POST['mpassword']))
	{
		$mpassword=$_POST['mpassword'].'~';
	
	if($mpassword==$password)
	{
		$a=$a+1;
	}
	else
	{
		echo("Password did not matched!!");
	}
	
	
	}else
	{
		echo("Password should be filled up to confirm the registration");
	}					
	
		
	if(isset($_POST['uname']))
	{
		$uname=$_POST['uname'];
		$length=strlen($uname);
	if($length>=2 && is_numeric($uname)==false)
	{
		$uname=$_POST['uname'].'~';
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
	
			
	if(isset($_POST['uemail']))
	{
		$a=$a+1;
	}else
	{
		echo("Fill the email address here");
	}


	if($a>4)
	{
	$file=fopen('reg.txt','a'.PHP_EOL);
	
	fwrite($file,$uname);
	fwrite($file,$password);
	fwrite($file,$mpassword);
	fwrite($file,$uemail);

	fclose($file);	
		
		header("location: login.php");
	}
	}
	
?>