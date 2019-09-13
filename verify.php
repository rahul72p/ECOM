<?php
  /* disable cache in browser */
  header('Cache-Control: no-cache, must-revalidate');
  header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
  /* encode an sql query */
  function encodequery($query) {
     /* sql connnection link - fill your details*/
     $dbname="hitfit";
     $servername="localhost";
     $username="root";
     $password="";
     $conn=mysqli_connect($servername,$username,$password,$dbname);
     $link=$conn;
    $result = mysqli_query($link,$query) or die('Error in query: '.$query);
     /* create one master array of the records */
     $posts = array();
     if(mysqli_num_rows($result)) {
        while($post = mysqli_fetch_assoc($result)) {
           $posts[] = array('user'=>$post);
        }
     }
     encodearray($posts);
  }
  /* Encode array to JSON string */
  function encodearray($posts) {
     header('Content-type: application/json');
     echo json_encode(array('users'=>$posts));
  }
?>
