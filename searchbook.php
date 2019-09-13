<?php
include("databaseconnect.php");
include("verify.php");
?>


<html lang="en">

	<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Good Book Store</title>
	<style>
body{
font-family: Comic Sans MS;
}
button
{
padding:8px 16px;
background-color:#6b90c6;
border:2px #3366cc;
color:white;
text-decoration:none;
font-family:Comic Sans MS;
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

	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">


	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
<!-- Bootstrap core CSS -->
	<link href="css/shop-homepage.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<body>
	<?php 
	include("navbar.php");
	?>
	<div class="container">
	<h1>
	<center>
	Search Result For
	<?php echo $_POST["search"]; ?>
	</center>
	</h1>
	<br>
	<div class="row">
			<?php
             if (isset($_POST['search'])) {
                $query = $_POST['search'];
                $sql = mysqli_query ($conn,"SELECT * from BookData WHERE BookName LIKE '%{$query}%'");
				$rowcount=mysqli_num_rows($sql);
				//$id=$row["ProductID"];
				while ($row = mysqli_fetch_array($sql)) {
					echo"<div class='col-lg-4 col-md-6 mb-4'><div class='card h-200'>";
					echo"<img class='card-img-top' src=". $row["ImageDes"] ." height='500' width='600' alt=''>";
					echo"<div class='card-body'>";
					echo"<h4 class='card-title'>".$row["BookName"]."</h4>";
					echo"<h5>Price :".$row["Price"]."</h5>";
					echo"<p class='card-text'>".$row["Description"]."<br><br></p>";
					//echo"<button type='submit'><a href='cart.php?id=$id'>Add To Cart</a></button>";
					echo"<div class='card-footer'><small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small></div>";
					echo"</div>";
					echo"</div></div>";
					//echo"number of product".$row["BookName"]."<br>";
					//echo".row["BookName"].";
				}
			 }
            ?>
			</div>
			</div>
			<?php
			include("footer.php");
			?>
			</body>
			</html>
			