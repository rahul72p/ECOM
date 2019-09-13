<?php
  include("databaseconnect.php");
  $pid = $_GET["pid"];
  session_start();
  $name = $_SESSION["newname"];
  if (isset($_SESSION["newname"])){
    $sql2="delete from mycart where Email = '$name' and ProductID = '$pid';";
    $rs=mysqli_query($conn,$sql2);
    header("Location: cartmain.php");
  }
?>
