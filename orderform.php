<?php  
session_start();
	include("databaseconnect.php"); 
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$zip_code=$_POST['zip_code'];
$country=$_POST['country'];
$contactno=$_POST['contactno'];
if(isset($_SESSION['newname'])){
 mysqli_query($conn,"insert into orders values ('$name', '$contactno','$email','$address', '$zip_code', '$country')");
header("Location:payments.php");   
}
}
?>