<?php
include("databaseconnect.php");
?>


<html lang="en">

	<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Good Book Store</title>
	
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
	
	<body background="back.jpeg">
	<?php 
	include("navbar.php");
	?>
	
<center>
<div class="col-lg-9">
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="homepage/h1.jpg" alt="First slide" height="350" width="900">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="homepage/h2.png" alt="First slide" height="350" width="900">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="homepage/h3.jpg" alt="First slide" height="350" width="900">
              </div>
			  <div class="carousel-item">
				<img class="d-block img-fluid" src="homepage/h4.jpg" alt="First slide" height="350" width="900">
              </div>
			  <div class="carousel-item">
				<img class="d-block img-fluid" src="homepage/h5.jpg" alt="First slide" height="350" width="900">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
</div>
</center>

	<?php /*
<header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('image1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
		  <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div><!-- Slide forth - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Forth Slide</h3>
              <p>This is a description for the forth slide.</p>
            </div>
          </div><!-- Slide fifth - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Fifth Slide</h3>
              <p>This is a description for the fifth slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
	  </div>
</header>
*/?>
<div class="container">
<h1><center><font color="white">TOP TRENDING BOOKS</font></center></h1><br>
<div class="row">
<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-200">
                <img class="card-img-top" src="homepage/b1.jpg" alt="The Perks Of Being A Wallflower" height="400" width="600">
                <div class="card-body">
                  <h4 class="card-title">
                    The Perks Of Being A Wallflower
                  </h4>
                  <h5>Price:500</h5>
                  <p class="card-text">The Perks of Being a Wallflower is a coming-of-age epistolary novel by American writer Stephen Chbosky which was first published on February 1, 1999, by Pocket Books. Set in the early 1990s, the novel follows Charlie, an introverted teenager, through his freshman year of high school in a Pittsburgh suburb.</p>
                <center><?php
				echo"<button type='submit'><a href='cart.php?id=1'>Add To Cart</a></button>";
				?>

				</center>
				</div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-200">
                <img class="card-img-top" src="homepage/b2.jpg" alt="The Perks Of Being A Wallflower" height="400" width="600">
                <div class="card-body">
                  <h4 class="card-title">
                    The Time Travellers Wife
                  </h4>
                  <h5>Price:350</h5>
                  <p class="card-text">
				  The story follows Henry DeTamble (Bana), a Chicago librarian with a paranormal genetic disorder that causes him to randomly time travel as he tries to build a romantic relationship with Clare Abshire (McAdams), who would become his wife.<br><br>
				  </p>
                <center><?php
				echo"<button type='submit'><a href='cart.php?id=2'>Add To Cart</a></button>";
				?>

				</center>
				</div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-200">
                <img class="card-img-top" src="homepage/b3.jpg" alt="The Perks Of Being A Wallflower" height="400" width="600">
                <div class="card-body">
                  <h4 class="card-title">
                    13 Reasons Why
                  </h4>
                  <h5>Price:400</h5>
                  <p class="card-text">
				  The series revolves around a high school student, Clay Jensen, and his friend Hannah Baker, a girl who committed suicide after suffering a series of demoralizing circumstances brought on by select individuals at her school. A box of cassette tapes recorded by Hannah before her suicide details thirteen reasons why she ended her life.
				  </p>
         <center>
<?php
				echo"<button type='submit'><a href='cart.php?id=3'>Add To Cart</a></button>";
				?>

                </center>
				</div><div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
</div>
</div>
<h1><center><font color="white">TOP SELLERS</font></center></h1><br>
<div class="row">
<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-200">
                <img class="card-img-top" src="homepage/b4.jpg" alt="The Perks Of Being A Wallflower" height="400" width="600">
                <div class="card-body">
                  <h4 class="card-title">
                    The DA VINCI Code
                  </h4>
                  <h5>Price:450</h5>
                  <p class="card-text">
	The Da Vinci Code is a 2003 mystery-detective novel by Dan Brown. It follows symbologist Robert Langdon and cryptologist Sophie Neveu after a murder in the Louvre Museum in Paris causes them to become involved in a battle between the Priory of Sion and Opus Dei over the possibility of Jesus Christ having been a companion to Mary Magdalene.
				 <br><br> </p><center>
                <?php
				echo"<button type='submit'><a href='cart.php?id=4'>Add To Cart</a></button>";
				?>

				</center>
				</div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-200">
                <img class="card-img-top" src="homepage/b5.jpg" alt="The Perks Of Being A Wallflower"  height="400" width="600">
                <div class="card-body">
                  <h4 class="card-title">
                    Harry Potter And The Deathly Hallows
                  </h4>
                  <h5>Price:700</h5>
                  <p class="card-text">
	The novel chronicles the events directly following Harry Potter and the Half-Blood Prince (2005), and the final confrontation between the wizards Harry Potter and Lord Voldemort, as well as revealing the previously concealed back story of several main characters. The title of the book refers to three mythical objects featured in the story, collectively known as the "Deathly Hallows".</p><center>
<?php
				echo"<button type='submit'><a href='cart.php?id=5'>Add To Cart</a></button>";
				?>
				  </center>
				  </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
</div><div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-200">
                <img class="card-img-top" src="homepage/b6.jpg" alt="The Perks Of Being A Wallflower" height="400" width="600">
                <div class="card-body">
                  <h4 class="card-title">
                    The Theory of EveryThing
                  </h4>
                  <h5>Price:600</h5>
                  <p class="card-text">
The Theory of Everything[1][2] is a 2014 British biographical romantic drama film[5] directed by James Marsh,[2] and adapted by Anthony McCarten from the memoir Travelling to Infinity: My Life with Stephen by Jane Hawking, which deals with her relationship with her ex-husband, theoretical physicist Stephen Hawking, his diagnosis of amyotrophic lateral sclerosis
				  <br><br></p><center>
<?php
				echo"<button type='submit'><a href='cart.php?id=6'>Add To Cart</a></button>";
				?>

				  </center>
				  </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
</div>
</div>
</div>

<?php
include("footer.php");
?>

</body>
</html>
