<?php 
session_start();
$newname=null;
 $loc=null;
    if(isset($_SESSION['newname'])) 
   {
        $loc =strpos($_SESSION["newname"], "@");
        $newname=substr($_SESSION["newname"],0,$loc);
   } 
    else
       $newname="";
?>