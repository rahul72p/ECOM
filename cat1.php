<?php
include("databaseconnect.php");
?>

<html>
<body background="back.jpeg">
	<meta charset="UTF 8" />
	<head>
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<title>SCIENCE FICTION</title>
		</head>
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

   <!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="mainpage.html">THE GOOD BOOK STORE</a>
        <div class="pos-f-t">
			<nav class="navbar navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
			</nav>
		</div>
    <div class="search-container" style="margin-top: 5px;margin-right: 6px;">
      <form action="search.php">
       <input type="text" placeholder="Search.." name="search" class="search" style="border-radius: 5px;border: 2px solid; border-color: #ffffff">
       <button type="submit" class="mybtn"><i class="fa fa-search"></i></button>
      </form>
    </div>
    <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="homepage.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutpage.php">About</a>
            </li>
			<div class="dropdown show">
				<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Categories
				</a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="cat1.php">Science Fiction</a>
					<a class="dropdown-item" href="cat2.php">TV Show</a>
					<a class="dropdown-item" href="cat3.php">Horror</a>
					<a class="dropdown-item" href="cat4.php">Biogrophy</a>
					<a class="dropdown-item" href="cat5.php">Fiction</a>
				</div>
			</div>
           	<li class="nav-item">
              <a class="nav-link" href="purchase page/purchasepage.php">Purchase</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>-->
	<br>
	<h1>
	<center><font color="white">
	SCIENCE FICTION</font>
	</center></h1>
	<br>
	<div class="container">
	<div class="row">
	<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <img class="card-img-top" src="cat1\sf1.jpg" height="500" width="600" alt="">
            <div class="card-body">
				<h4 class="card-title">
					Dune
				</h4>
                <h5>Price : 500</h5>
                <p class="card-text">
				Dune is a 1965 epic science fiction novel by American author Frank Herbert, originally published as two separate serials in Analog magazine. It tied with Roger Zelazny's This Immortal for the Hugo Award in 1966,[3] and it won the inaugural Nebula Award for Best Novel.[4] It is the first installment of the Dune saga, and in 2003 was cited as the world's best-selling science fiction novel.
				<br><br></p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=101'>Add To Cart</a></button>";
				?>
			</div>
			
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
	</div>
	<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <img class="card-img-top" src="cat1\sf2.jpg" height="500" width="600" alt="">
            <div class="card-body">
				<h4 class="card-title">
					THE ENDERS GAME
				</h4>
                <h5>Price : 300</h5>
                <p class="card-text">
				Ender's Game is a 2013 American military science fiction action film based on the novel of the same name by Orson Scott Card. Written and directed by Gavin Hood, the film stars Asa Butterfield as Andrew "Ender" Wiggin, an unusually gifted child who is sent to an advanced military academy in outer space to prepare for a future alien invasion.
				<br><br><br><br></p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=102'>Add To Cart</a></button>";
				//<button type="submit"><a href="cart.php">Add To Cart</a></button>
			?></div>
			
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
	</div>
<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <img class="card-img-top" src="cat1\sf3.jpg" height="500" width="600" alt="">
            <div class="card-body">
				<h4 class="card-title">
					THE NEUROMANGER
				</h4>
                <h5>Price : 450</h5>
                <p class="card-text">
				Neuromancer is a 1984 science fiction novel by American-Canadian writer William Gibson. It is one of the best-known works in the cyberpunk genre and the first novel to win the Nebula Award, the Philip K. Dick Award, and the Hugo Award.[1] It was Gibson's debut novel and the beginning of the Sprawl trilogy. The novel tells the story of a washed-up computer hacker hired by a mysterious employer to pull off the ultimate hack.
				<br><br></p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=103'>Add To Cart</a></button>";
				//<button type="submit"><a href="cart.php">Add To Cart</a></button>
			?>
			</div>
			
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
	</div>
</div>
<br>
<div class="row">
<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <img class="card-img-top" src="cat1\sf4.jpg" height="500" width="600" alt="">
            <div class="card-body">
				<h4 class="card-title">
					THE LEFT HAND OF LIGHT
				</h4>
                <h5>Price : 600</h5>
                <p class="card-text">
				A lonely woman with incredible intuitive powers considers ending her life. A dark and driven man with the ability to cross over into the Spirit World searches in vain for the soul of his lost love. When these two meet, so begins an epic adventure into places they could have never imagined while the Immortal Night, the Black Queen of Shadow contrives to ensnare and steal the life force of The Left Hand of Light into the Underworld.
				<br><br></p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=104'>Add To Cart</a></button>";
				//<button type="submit"><a href="cart.php">Add To Cart</a></button>
			?>
			</div>
			
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
	</div>
	<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <img class="card-img-top" src="cat1\sf5.jpg" height="500" width="600" alt="">
            <div class="card-body">
				<h4 class="card-title">
					THE TIME MACHINE
				</h4>
                <h5>Price : 700</h5>
                <p class="card-text">
				The Time Machine is a 2002 American science fiction film loosely adapted from the 1895 novel of the same name by H. G. Wells and the screenplay of the 1960 film of the same name by David Duncan. Arnold Leibovit served as executive producer and Simon Wells served as director, the great-grandson of the original author.
				<br><br><br><br></p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=105'>Add To Cart</a></button>";
				//<button type="submit"><a href="cart.php">Add To Cart</a></button>
			?>
			</div>
			
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
	</div>
<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <img class="card-img-top" src="cat1\sf6.jpg" height="500" width="600" alt="">
            <div class="card-body">
				<h4 class="card-title">
					THE STRANGER IN THE STRANGE LAND
				</h4>
                <h5>Price : 300</h5>
                <p class="card-text">
				Stranger in a Strange Land is a 1961 science fiction novel by American author Robert A. Heinlein. It tells the story of Valentine Michael Smith, a human who comes to Earth in early adulthood after being born on the planet Mars and raised by Martians. The novel explores his interaction with—and eventual transformation of—Terran culture. In 2012, the US Library of Congress named it one of 88 "Books that Shaped America".
				</p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=106'>Add To Cart</a></button>";
				//<button type="submit"><a href="cart.php">Add To Cart</a></button>
			?>
			</div>
			
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
	</div>
</div>
<br>
	<div class="row">
	<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <img class="card-img-top" src="cat1\sf7.jpg" height="500" width="600" alt="">
            <div class="card-body">
				<h4 class="card-title">
					THE 100
				</h4>
                <h5>Price : 500</h5>
                <p class="card-text">
				The 100 (pronounced The Hundred) is an American post-apocalyptic science fiction drama television series that premiered on March 19, 2014, on The CW. The series, developed by Jason Rothenberg, is loosely based on the 2013 book of the same name, the first in a series by Kass Morgan.
				<br><br><br><br><br><br></p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=107'>Add To Cart</a></button>";
				//<button type="submit"><a href="cart.php">Add To Cart</a></button>
			?>
			</div>
			
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
	</div>
	<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <img class="card-img-top" src="cat1\sf8.jpg" height="500" width="600" alt="">
            <div class="card-body">
				<h4 class="card-title">
					PITCH DARK
				</h4>
                <h5>Price : 300</h5>
                <p class="card-text">
				"Pitch Dark is the story of the end of a love affair—a story that, in Renata Adler’s brilliant telling, becomes a richly diffracted, illuminating, investigation of an exceptional woman. After a nine-year affair with Jake, a married man, Kate Ennis decides to escape. She takes off, looking for something beautiful and quiet by the sea, but finds herself in a pitch dark and driving rain on a lonely Irish road.
				<br><br><br><br></p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=108'>Add To Cart</a></button>";
				//<button type="submit"><a href="cart.php">Add To Cart</a></button>
			?>
			</div>
			
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
	</div>
<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <img class="card-img-top" src="cat1\sf9.jpg" height="500" width="600" alt="">
            <div class="card-body">
				<h4 class="card-title">
					RUNAWAY ALIEN
				</h4>
                <h5>Price : 450</h5>
                <p class="card-text">
				RDex is a runaway, but not your typical runaway. He's a young alien who has stolen a star ship in order to rescue his teacher, who he thinks is being held as a prisoner on earth. After crashing on earth, RDex is befriended by two middle graders, Tommy and Hawk. RDex lives in a shed in Hawk's backyard, where he watches old cowboy movies for entertainment and drinks cans of oil to quench his thirst. When Tommy and Hawk disguise RDex as a human and bring him to class, that's when things get complicated.
				<br><br></p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=109'>Add To Cart</a></button>";
				//<button type="submit"><a href="cart.php">Add To Cart</a></button>
			?>
			</div>
			
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
	</div>
</div>
<br>
	<div class="row">
	<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <img class="card-img-top" src="cat1\sf10.jpg" height="500" width="600" alt="">
            <div class="card-body">
				<h4 class="card-title">
					SAMUEL DELANY
				</h4>
                <h5>Price : 500</h5>
                <p class="card-text">
				His science fiction novels include Babel-17, The Einstein Intersection Nova, Dhalgren, and the Return to Nevèrÿon series. After winning four Nebula awards and two Hugo awards over the course of his career, Delany was inducted by the Science Fiction and Fantasy Hall of Fame in 2002. From January 2001 until his retirement in May 2015
				<br><br><br><br></p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=110'>Add To Cart</a></button>";
				//<button type="submit"><a href="cart.php">Add To Cart</a></button>
			?>
			</div>
			
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
	</div>
	<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <img class="card-img-top" src="cat1\sf11.jpg" height="500" width="600" alt="">
            <div class="card-body">
				<h4 class="card-title">
					STAR WARS
				</h4>
                <h5>Price : 300</h5>
                <p class="card-text">
				The franchise began in 1977 with the release of the film Star Wars which became a worldwide pop culture phenomenon. It was followed by the successful sequels The Empire Strikes Back (1980) and Return of the Jedi (1983); these three films constitute the original Star Wars trilogy. A prequel trilogy was released between 1999 and 2005
				<br><br><br><br></p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=111'>Add To Cart</a></button>";
				//<button type="submit"><a href="cart.php">Add To Cart</a></button>
			?>
			</div>
			
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
	</div>
<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <img class="card-img-top" src="cat1\sf12.jpg" height="500" width="600" alt="">
            <div class="card-body">
				<h4 class="card-title">
					DAY ONE
				</h4>
                <h5>Price : 450</h5>
                <p class="card-text">
		         Day One has helped millions of people worldwide easily capture life as they live it. To help you preserve and share these memories, we’re pleased to introduce Day One Book. As of our 2.5.12 release on iOS, book printing is now available internationally! All prices are in USD.
				<br><br><br><br><br><br></p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=112'>Add To Cart</a></button>";
				//<button type="submit"><a href="cart.php">Add To Cart</a></button>
			?>
			</div>
			
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
	</div>
</div>
</div>
<br>
	<?php
	include("footer.php");
	?>
		

<!--<footer class="py-5 bg-dark">
      <div class="container">
       <p class="m-0 text-center text-white">THE GOOD BOOK STORE</p>
</footer>-->
	  
</body>
</html>