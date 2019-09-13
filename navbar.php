<?php
include("databaseconnect.php");
include("username.php");
?>
<html lang="en">

	<head>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Good Book Store</title>
	<style>
body{
font-family: Lobster;
}
button
{
padding:8px 16px;
background-color:#6b90c6;
border:2px #3366cc;
color:white;
text-decoration:none;
font-family:Lobster;
font-weight:;
background: #333;
border-radius: 5px;
transition: background 0.5s;
}
button:hover 
{
background: #00ff00;
}


</style>

	<!-- bootstrap links
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	-->
	
	
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

	<!--other bootstrap files close-->
	</head>
	<body>
	<!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
	  	    <a class="navbar-brand" href="index.html" style="font-family:'Lobster'; font-size: 30px">The Good Book Store</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<form class="form-inline my-2 my-lg-0" action="searchbook.php" method="post">
				<input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
			<li class="nav-item">
              <a class="nav-link" href="mainpage.php">Home</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="aboutpage.php">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="cat1.php">Science Fiction</a>
                <a class="dropdown-item" href="cat2.php">TV Show</a>
                <a class="dropdown-item" href="cat3.php">Horror</a>
                <a class="dropdown-item" href="cat4.php">Biography</a>
                <a class="dropdown-item" href="cat5.php">Fiction</a>
              </div>
            </li>
			<!--
			<li class="nav-item">
              <a class="nav-link" href="contactpage.php">Contact</a>
            </li>-->
			<a href="cartmain.php">
			<img src="cart2.png" height="30" width="30"></img>
			</a>
			<?php
                $q=0;
                if (!$conn) {
                  echo("Connection failed: " . mysqli_connect_error());
                }
                if (isset($_SESSION["newname"])) {
                  $sql="select Quantity from mycart where Email in('".$_SESSION["newname"]."')";//.$_SESSION["name"]."');";
                  $result=mysqli_query($conn,$sql);
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      $q+=$row["Quantity"];
                    }
                  }
                }
				else{
                  if(isset($_COOKIE["UID"])){
                    $cookie=$_COOKIE["UID"];
                    $sql1="select Quantity from mycart where SessionID in ('".$cookie."');";
                    $result=mysqli_query($conn,$sql1);
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()){
                        $q += $row["Quantity"];
                      }
                    }
                  }
                  else{
                    $q=0; //setcookie($cookie_name,$cookie_value,time()+(86400*30*365));
                  }
                }
				echo"<p style='color:white;'>(".$q.")</p>";
				?>
				
			<li class="nav-item">
              <a class="nav-link" href="cartmain.php">Purchase</a>
            </li>
			
			<li class="nav-item dropdown">
			<?php
				if (isset($_SESSION["newname"])) 
				{
			?>
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hi,
			<?php
			echo $newname;
			?>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
             <a class="dropdown-item" href="logout.php">Logout</a>
			</div>
			</li>
			<?php 
				} 
				else
				{
			?>
			<li class="nav-item">
              <a class="nav-link" href="index.html">Login/Signup</a>
            </li>
			<?php
				}
			?>
          </ul>
        </div>
      </div>
    </nav>
	<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>