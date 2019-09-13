<?php
include("databaseconnect.php");
include("username.php");
if(isset($_GET["id"]))
{
	$pid=$_GET["id"];
}
	$chk = 0;
	//$_SESSION["pid"]=$pid;
	/*$sql="select * from bookdata where ProductID=".$pid;
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
	if (($pid >100 && $pid<113)) {
	  $category="science fiction";
	}
	if (($pid > 200 && $pid < 213)) {
  	$category="tvshow";
	}
	if (($pid > 300 && $pid < 313)) {
  	$category="horror";
	}
	if (($pid > 400 && $pid < 413)) {
  	$category="biography";
	}
	if (($pid > 500 && $pid < 513)) {
  	$category="fiction";
	}*/
	//echo"$pid";
	//echo"$category";
	if(isset($_SESSION['newname'])){
    $sql="select ProductID from mycart where Email='".$_SESSION["newname"]."';";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){
         if($pid-$row["PID"]==0)
          $chk = 1;
        }
      }
	  if ($chk == 0) {
      $sql="insert into mycart values('".$_SESSION["newname"]."',".$pid.",1);";
      $result=mysqli_query($conn,$sql);
      if (($pid >100 && $pid<113)) {
	 header("Location:cat1.php");
	}
	if (($pid > 200 && $pid < 213)) {
  	header("Location:cat2.php");
	}
	if (($pid > 300 && $pid < 313)) {
  	header("Location:cat3.php");
	}
	if (($pid > 400 && $pid < 413)) {
  	header("Location:cat4.php");
	}
	if (($pid > 500 && $pid < 513)) {
  	header("Location:cat5.php");
	}
	if($pid>0 && $pid<7){
		header("mainpage.php");
	}
    }
	else {
        header("Location:cart.php?err=2");
      }
	}
	//left to insert cookies
	else
	{
      $cookie_name="UID";
      $cookie_value=session_id();
      setcookie($cookie_name,$cookie_value,time()+(86400*30*365));
      //Response.cookies("UID").Expires=date+365
      $sql="select ProductID from tempcart where SessionID='".session_id()."';";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
          if($pid-$row["ProductID"]==0) {
           $chk=1; 
          }
        }
      }
	  if($chk==0)
	  {
      $sql="insert into tempcart values('".session_id()."',".$pid.",1);";
      $result=mysqli_query($conn,$sql);
      if (($pid >100 && $pid<113)) {
	 header("Location:cat1.php");
	}
	if (($pid > 200 && $pid < 213)) {
  	header("Location:cat2.php");
	}
	if (($pid > 300 && $pid < 313)) {
  	header("Location:cat3.php");
	}
	if (($pid > 400 && $pid < 413)) {
  	header("Location:cat4.php");
	}
	if (($pid > 500 && $pid < 513)) {
  	header("Location:cat5.php");
	}
	if($pid>0 && $pid<7){
		header("Location:mainpage.php");
	}
	  }
	else
	{
		header("Location:cart.php?err=2");
	}
    }
?>
