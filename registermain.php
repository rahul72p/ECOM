<?php
	//require 'PHPMailerAutoload.php';
	include("databaseconnect.php");
	session_start();
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	if(mysqli_query($conn,"INSERT INTO usertable values('".$fname."','".$lname."','".$email."','".$pass."')");)
	{
		$_SESSION["newname"]=$email;
		header('Location:mainpage.php');
	}
	else
	{
		header('Location:index.html');
	}
?>