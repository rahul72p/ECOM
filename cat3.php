<?php
include("databaseconnect.php");
?>

<html>
<body background="back.jpeg">
	<meta charset="UTF 8" />
	<head>
	<title>
	HORROR
	</title>
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

<!--	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
	HORROR</font>
	</center></h1>
	<br>
	<div class="container">
	<div class="row">
	<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <a href="#"><img class="card-img-top" src="cat3/h1.jpg" alt=""></a>
            <div class="card-body">
				<h4 class="card-title">
					The Amityville Horror
				</h4>
                <h5>Price : 500</h5>
                <p class="card-text">The Amityville Horror is a book by American author Jay Anson, published in September 1977. It is also the basis of a series of films released from 1979 onwards. The book is claimed to be based on the paranormal experiences of the Lutz family, but has led to controversy and lawsuits over its truthfulness.</p>
				 <?php
				echo"<button type='submit'><a href='cart.php?id=301'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat3/h2.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    The Graveyard Appartment
                  </h4>
                  <h5>Price : 300</h5>
                  <p class="card-text">The Graveyard Apartment is a children's fantasy novel by the English author Neil Gaiman, simultaneously published in Britain and America during 2008. The Graveyard Book traces the story of the boy Nobody "Bod" Owens who is adopted and raised by the supernatural occupants of a graveyard after his family is brutally murdered.</p>
				   <?php
				echo"<button type='submit'><a href='cart.php?id=302'>Add To Cart</a></button>";
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
				<a href="#"><img class="card-img-top" src="cat3/h3.jpg" alt=""></a>
					<div class="card-body">
						<h4 class="card-title">
							Naomi's Room
						</h4>
						<h5>Price : 450</h5>
						<p class="card-text">Naomi's Room is a 1991 horror novel by English author Jonathan Aycliffe, described by the Newcastle Evening Chronicle as being "among the finest of English ghost stories".[1] It has been optioned for film in Hollywood
						<br><br><br></p>
						 <?php
				echo"<button type='submit'><a href='cart.php?id=303'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat3/h4.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    IT
                  </h4>
                  <h5>Price : 600</h5>
                  <p class="card-text">It is a 1986 horror novel by American author Stephen King. It was his 22nd book and 18th novel written under his own name. The story follows the experiences of seven children as they are terrorized by an entity that exploits the fears and phobias of its victims to disguise itself while hunting its prey. "It" primarily appears in the form of a clown to attract its preferred prey of young children.</p>
				   <?php
				echo"<button type='submit'><a href='cart.php?id=304'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat3/h5.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    The Girl From The Well
                  </h4>
                  <h5>Price : 700</h5>
                  <p class="card-text">The Girl from the Well is a young adult series of novels by Rin Chupeco.[1] The first book, The Girl from the Well, was published through Sourcebooks Fire on August 5, 2014 and was followed by The Suffering, which released on September 8, 2015.
				  <br><br><br><br></p>
				   <?php
				echo"<button type='submit'><a href='cart.php?id=305'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat3/h6.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    Clay
                  </h4>
                  <h5>Price : 300</h5>
                  <p class="card-text">Clay is a children's/young adult novel by David Almond, published in 2005. It was shortlisted for the Carnegie Medal and longlisted for the Guardian Children's Fiction Prize.It was adapted for television in 2008 by Andrew Gunn, and aired on BBC One on 30 March 2008.
				  <br><br><br><br></p>
				   <?php
				echo"<button type='submit'><a href='cart.php?id=306'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat3/h7.png" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          DRACULA
        </h4>
                <h5>Price : 500</h5>
                <p class="card-text">
        Dracula is an 1897 Gothic horror novel by Irish author Bram Stoker. It introduced Count Dracula, and established many conventions of subsequent vampire fantasy. The novel tells the story of Dracula's attempt to move from Transylvania to England so that he may find new blood and spread the undead curse, and of the battle between Dracula and a small group of men and a woman led by Professor Abraham Van Helsing.
        <br><br><br></p>
         <?php
				echo"<button type='submit'><a href='cart.php?id=307'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat3/h8.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          THE TIGERS DAUGHTER
        </h4>
                <h5>Price : 300</h5>
                <p class="card-text">
        The Hokkaran empire has conquered every land within their bold reach―but failed to notice a lurking darkness festering within the people. Now, their border walls begin to crumble, and villages fall to demons swarming out of the forests.Away on the silver steppes, the remaining tribes of nomadic Qorin retreat and protect their own, having bartered a treaty with the empire.
        <br><br><br><br></p>
        <?php
				echo"<button type='submit'><a href='cart.php?id=308'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat3/h9.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          DOLL BONES
        </h4>
                <h5>Price : 450</h5>
                <p class="card-text">
        Doll Bones is the story of Zachary "Zach" Barlow, Alice Magnaye, and Poppy Bell's quest to return a haunted doll to its proper grave site in another town. Zach, Alice, and Poppy play a role-playing game with Horrific action figures and metal cut-outs. Poppy runs the game which involves Zach's character "William the Blade" and Alice's character "Lady Jaye" on a quest for the Great Queen aboard William's sailing ship, Neptune's Pearl.
        <br><br><br></p>
         <?php
				echo"<button type='submit'><a href='cart.php?id=309'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat3/h10.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          THE LOST CARVERN
        </h4>
                <h5>Price : 500</h5>
                <p class="card-text">
        The Lost Cavern: And Other Stories of the Fantastic eBook: H. F. Heard: Amazon.ca: Kindle Store. ... In the wilds of Mexico, a veteran spelunker hears rumors of a cave that could take him deeper than he's ever gone before. The locals whisper old ... Each month we unveil a new collection of Kindle books for $3.99 or less.
        <br><br><br><br><br><br><br><br></p>
         <?php
				echo"<button type='submit'><a href='cart.php?id=310'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat3/h11.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          WE ARE ALWAYS WATCHING
        </h4>
                <h5>Price : 300</h5>
                <p class="card-text">
        The move from New York to the decrepit Pennsylvania farmhouse is as bad as West Ridley thought it would be. His father’s crippling vertigo only seems to get worse, and even with his mother working herself to the bone, they’re out of money and options.Grandpa Abraham is a drunk bastard and the living embodiment of the long neglected farmhouse. He claims the place is haunted. Ghosts roam the hall at night and their muffled cries fill the silence of warm, summer nights.

        <br><br><br><br></p>
        <?php
				echo"<button type='submit'><a href='cart.php?id=311'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat3/h12.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          THE DEVILS KISS
        </h4>
                <h5>Price : 450</h5>
                <p class="card-text">
        Kayla Sutton faces a question no mother wants to face: what would you do to save your daughter? Broke and desperate, she siphons thousands from her employer to pay for her daughter's treatment, but when Gage Channing discovers her theft, she is shocked to learn that her boss has no intention of turning her over to the police. Instead he issues an ultimatum—give him her sexual submission, or go to jail.

        <br><br><br><br><br><br></p>
        <?php
				echo"<button type='submit'><a href='cart.php?id=312'>Add To Cart</a></button>";
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
</footer>
	  -->
</body>
</html>