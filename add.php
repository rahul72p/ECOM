<?php
  include("databaseconnect.php");
  session_start();
  $q=0;
  $pid=$_GET["id"];
  if (isset($_SESSION["newname"])){
    echo $pid;
    $sql="select * from mycart where Email in('".$_SESSION["newname"]."') AND ProductID=".$pid.";";
    $rss=mysqli_query($conn,$sql);
    if($rss->num_rows>0){
      while ($row = mysqli_fetch_assoc($rss)){
        $q=$row["Quantity"];
      }
    }
    $q++;
    $sql2="update mycart set Quantity=".$q." where ProductID=".$pid.";";
    $rs=mysqli_query($conn,$sql2);
    header("Location: cartmain.php");
  }
  else{
    $cookie=$_COOKIE["UID"];
    echo $q;
    $sql1="select * from tempcart where SessionID in ('".$cookie."') AND ProductID=".$pid.";";
    $rss=mysqli_query($conn,$sql1);
    if($rss->num_rows>0){
      while ($row = mysqli_fetch_assoc($rss)){
        $q=$row["Quantity"];
      }
    }
    $q++;
    $sql2="update Cart set Quantity=".$q." where PID=".$pid.";";
    $rs=mysqli_query($conn,$sql2);
    header("Location: cart.php");
}
?>