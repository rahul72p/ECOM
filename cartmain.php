<?php
include("databaseconnect.php");
?>

<html>
<body background="back.jpeg">
	<meta charset="UTF 8" />
	<head>
		<title>MY CART</title>
		</head>
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
	<?php 
	include("navbar.php");
	?>
	<script type="text/javascript">
			if(!!window.performance .. window.performance.navigation.type === 2) {
      	console.log('Reloading');
        window.location.reload();
      }
  	</script>
	<br>
	<h1>
	<center>
	MY CART
	</center></h1>
	<br>
	<?php
							//$name=null;
							//$loc=null;
							$amt=0;
							if(isset($_SESSION["newname"])){
	  						//$loc = strpos($_SESSION["newname"], "@");
	    					//$name=substr($_SESSION["newname"],$loc-1);
	    					$sql = "select * from mycart where Email in('".$_SESSION["newname"]."');";
	    					$result=mysqli_query($conn,$sql);
								if($result->num_rows>0){
	    						while ($rss = mysqli_fetch_assoc($result)){
	        					$sql = "select * from BookData where ProductID=".$rss["ProductID"].";";
	        					$result2=mysqli_query($conn,$sql);
	        					if($result2->num_rows>0){
	          					while ($rs = mysqli_fetch_assoc($result2)){
					
							          $amt= $amt + ($rs["Price"] * $rss["Quantity"]);
									  //echo"<h1>".$amt."</h1>";
							          //echo ("<div class='card-body'><h4 class='card-title'><a href='item.php?id=" .  $rs["PID"] . "'>" .  $rs["Name"] . "</a></h4><h5>₹" . $rs["Rate"] . "</h5>" . "<br><h6>Quantity: ". $rss["Quantity"]."<a href='add.php?id=" . $rs["PID"] . "' style='border: 1px solid;border-radius:10px;margin-left:45px;padding: 4px;text-decoration:none;'>+</a>&nbsp&nbsp&nbsp&nbsp<a href='subtract.php?id=" . $rs["PID"] . "' style='    border: 1px solid;border-radius: 10px;margin-left: 5px;padding: 5px; text-decoration:none;'>-</a><br></h6></div><div class='card-footer'><small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small><a href='remove.php?pid=". $rs["PID"] ."''><h6 style='padding-top:2px;margin-left:130px;margin-top:-20px;'>Remove</h6></a></div></div></div>");
					echo"<div class='col-lg-4 col-md-6 mb-4'><div class='card h-200'>";
					echo"<img class='card-img-top' src=". $rs["ImageDes"] ." height='500' width='600' alt=''>";
					echo"<div class='card-body'>";
					echo"<h4 class='card-title'>".$rs["BookName"]."</h4>";
					echo"<h5>Price :".$rs["Price"]."</h5>";
					//echo"<p class='card-text'>".$row["Description"]."<br><br></p>";
					//echo"<button type='submit'><a href='cart.php'>Add To Cart</a></button>";
					echo"<h6>Quantity: ". $rss["Quantity"]."<center><a href='add.php?id=" . $rs["ProductID"] . "' style='border: 1px solid;border-radius:10px;margin-left:45px;padding: 4px;text-decoration:none;'>+</a>&nbsp&nbsp&nbsp&nbsp<a href='subtract.php?id=" . $rs["ProductID"] . "' style='    border: 1px solid;border-radius: 10px;margin-left: 5px;padding: 5px; text-decoration:none;'>-</a></center><br></h6>";
					echo"<center><a href='remove.php?pid=". $rs["ProductID"] ."''><h6>Remove</h6></a></center>";
					echo"<div class='card-footer'><small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small></div>";
					echo"</div>";
					echo"</div></div>";	
					//echo"<h1>".$amt."</h1>";
											}
										}
									}
								}
	  				}
					else{
	        		if(isset($_COOKIE["UID"])){
	        			$cookie = $_COOKIE["UID"];
	        			$sql1="select * from mycart where SessionID in ('".$cookie."');";
								$result=mysqli_query($conn,$sql1);
								if($result->num_rows>0){
	           			while ($rss = mysqli_fetch_assoc($result)){
	        					$sql = "select * from bookdata where ProductID=".$rss["PID"].";";
	        					$result2=mysqli_query($conn,$sql);
										if($result2->num_rows>0){
	          					while ($rs = mysqli_fetch_assoc($result2)){
							          echo ("<div class='col-lg-4 col-md-6 mb-4'><div class='card h-100' style='border: 1px solid #d6cccc;margin-top=10px;'>");
							          echo ("<a href='item.php?id=" . $rs["PID"] ."'><img class='card-img-top' height=200 width=200 src=" . $rs["ImgSrc"] . " alt=''></a>");
							          $amt= $amt + ($rs["Rate"] * $rss["Quantity"]);
							          echo ("<div class='card-body'><h4 class='card-title'><a href='item.php?id=" .  $rs["PID"] . "'>" .  $rs["Name"] . "</a></h4><h5>₹" . $rs["Rate"] . "</h5>" . "<br><h6>Quantity: ". $rss["Quantity"]."<a href='add.php?id=" . $rs["PID"] . "' style='border: 1px solid;border-radius:10px;margin-left:45px;padding: 4px;text-decoration:none;'>+</a>&nbsp&nbsp&nbsp&nbsp<a href='subtract.php?id=" . $rs["PID"] . "' style='    border: 1px solid;border-radius: 10px;margin-left: 5px;padding: 5px; text-decoration:none;'>-</a><br></h6></div><div class='card-footer'><small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small><a href='remove.php?pid=". $rs["PID"] ."''><h6 style='padding-top:2px;margin-left:130px;margin-top:-20px;'>Remove</h6></a></div></div></div>");
										
											}
										}
									}
								}
	    				}
	    				else{ echo "Rahul Patel there is an error"; }
						}
					?>
					<h1>
					<center>
					Total Amt:<?php echo($amt);
					$_SESSION['total'] = $amt;?>
					<button type='submit'><a href='placeorder.php'>ORDER NOW</a></button>
					</center>
					</h1>
					
					
			<?php
			include("footer.php");
			?>
			<
			</body>
			</html>
			
