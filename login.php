<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include("databaseconnect.php");
session_start();
$uname="";
$pwd="";
$uname=$_POST["email"];
$pwd=$_POST["pass"];

$sql="select * from usertable where Email='".$uname."'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_assoc($result);
	
	if ($row["Email"]==$uname && $row["Password"]==$pwd){
		$_SESSION["newname"]=$uname;
		header('Location:mainpage.php');
		//echo("session varriable is set");
		// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

//Load composer's autoloader
require 'vendor/autoload.php';
require 'databaseconnect.php';

$result = mysqli_query($db, "SELECT Email FROM usertable");

while ($row = mysqli_fetch_assoc($result))
{

  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
      //Server settings
      //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'storegoodbook@gmail.com';                 // SMTP username
      $mail->Password = 'goodbookstore1234';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('storegoodbook@gmail.com');
      $mail->addAddress($row['Email']);     // Add a recipient
      //$mail->addAddress('ellen@example.com');               // Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');

      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Welcome';
      $mail->Body    = '<b>The Good Book Store';
      $mail->AltBody = '';

      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }
  
}
	}
	else
		header('Location: index.html?err=1');		
}
else
	header('Location: index.html?err=1');		

?>
<html>
<body>
<!--nuthing will go here-->
</body>
</html>