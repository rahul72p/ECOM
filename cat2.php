<?php
include("databaseconnect.php");
?>

<html>
<body background="back.jpeg">

	<meta charset="UTF 8" />
	<head>
	<title>	TV SHOW	</title>
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
  
 <!--  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
	TV SHOWS</font>
	</center></h1>
	<br>
	<div class="container">
	<div class="row">
	<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <a href="#"><img class="card-img-top" src="cat2/tv1.jpg" alt=""></a>
            <div class="card-body">
				<h4 class="card-title">
					The Game Of Thrones
				</h4>
                <h5>Price : 500</h5>
                <p class="card-text">Game of Thrones is an American fantasy drama television series created by David Benioff and D. B. Weiss. It is an adaptation of A Song of Ice and Fire, George R. R. Martin's series of fantasy novels, the first of which is A Game of Thrones.</p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=201'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat2/tv2.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    Friends
                  </h4>
                  <h5>Price : 300</h5>
                  <p class="card-text">Friends (stylized as F•R•I•E•N•D•S) is an American television sitcom, created by David Crane and Marta Kauffman, which aired on NBC from September 22, 1994, to May 6, 2004, lasting ten seasons.</p>
				  <?php
				echo"<button type='submit'><a href='cart.php?id=202'>Add To Cart</a></button>";
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
				<a href="#"><img class="card-img-top" src="cat2/tv3.jpg" alt=""></a>
					<div class="card-body">
						<h4 class="card-title">
							Narcos
						</h4>
						<h5>Price : 450</h5>
						<p class="card-text">Narcos is a US crime drama web television series created and produced by Chris Brancato, Carlo Bernard, and Doug Miro. Season one, comprising 10 episodes, originally aired on August 28, 2015, as a Netflix exclusive.</p>
						<?php
				echo"<button type='submit'><a href='cart.php?id=203'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat2/tv4.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    The Walking Dead
                  </h4>
                  <h5>Price : 600</h5>
                  <p class="card-text">The Walking Dead is an American post-apocalyptic horror television series developed by Frank Darabont for AMC that is based on the comic book series of the same name by Robert Kirkman, Tony Moore, and Charlie Adlard. Andrew Lincoln plays the show's lead character, sheriff's deputy Rick Grimes
				  <br><br></p>
				  <?php
				echo"<button type='submit'><a href='cart.php?id=204'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat2/tv5.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    Breaking Bad
                  </h4>
                  <h5>Price : 700</h5>
                  <p class="card-text">Breaking Bad is an American neo-western crime drama television series created and produced by Vince Gilligan. The show originally aired on the AMC network for five seasons, from January 20, 2008 to September 29, 2013.It tells the story of Walter White (Bryan Cranston), a struggling high school chemistry teacher diagnosed with inoperable lung cancer. </p>
				  <?php
				echo"<button type='submit'><a href='cart.php?id=205'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat2/tv6.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    Mr.Robot
                  </h4>
                  <h5>Price : 300</h5>
                  <p class="card-text">Mr. Robot is an American drama–thriller television series created by Sam Esmail. It stars Rami Malek as Elliot Alderson, a cybersecurity engineer and hacker who suffers from social anxiety disorder and clinical depression.
				  <br><br><br><br></p>
				  <?php
				echo"<button type='submit'><a href='cart.php?id=206'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat2\tv7.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          A SERIES OF UNFORTUNE EVENTS
        </h4>
        <h5>Price : 500</h5>
        <p class="card-text">
        Lemony Snicket's A Series of Unfortunate Events, or simply A Series of Unfortunate Events, is an American black comedy-drama[4] television series from Netflix, developed by Mark Hudis and Barry Sonnenfeld,based on the children's novel series of the same name by Lemony Snicket. It stars Neil Patrick Harris, Patrick Warburton, Malina Weissman, Louis Hynes, K. Todd Freeman, and Presley Smith.
        <br><br><br></p>
        <?php
				echo"<button type='submit'><a href='cart.php?id=207'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat2\tv8.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          THE BOOK OF NEGROES
        </h4>
                <h5>Price : 300</h5>
                <p class="card-text">
        The Book of Negroes is a miniseries based on the novel of the same name by Canadian writer Lawrence Hill. The book in turn derives its origins from the historical document Book of Negroes, and tells the story of a fictional woman forcefully brought to South Carolina from West Africa at the time of the American Revolution. Clement Virgo and Hill collaborated on writing the six-part miniseries, with Virgo also directing.
        <br><br><br><br></p>
        <?php
				echo"<button type='submit'><a href='cart.php?id=208'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat2\tv9.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          ROSEWELL
        </h4>
                <h5>Price : 450</h5>
                <p class="card-text">
        Rosewell Plantation in Gloucester County, Virginia, was for more than 100 years the home of a branch of the Page family, one of the First Families of Virginia. Begun in 1725, the Flemish bond brick Rosewell mansion overlooking the York River was one of the most elaborate homes in the American colonies. In Mansions of Virginia, the architectural historian Thomas Tileston Waterman described the plantation house as "the largest and finest of American houses of the colonial period."
        <br><br><br></p>
        <?php
				echo"<button type='submit'><a href='cart.php?id=209'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat2\tv10.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          GOOSEBUMPS
        </h4>
                <h5>Price : 500</h5>
                <p class="card-text">
        Goosebumps is a 2015 American horror comedy film based on the children's book series of the same name by R.L. Stine. It was directed by Rob Letterman and written by Darren Lemke, from a story by Scott Alexander and Larry Karaszewski. The film stars Jack Black (in a triple role), Dylan Minnette, Odeya Rush, Amy Ryan, Ryan Lee, Jillian Bell, and Halston Sage. It was financed by Sony, LStar Capital, and Village Roadshow Picture and also produced by Sony Pictures Animation, Original Film, and Scholastic Entertainment.
        <br><br><br><br><br></p>
        <?php
				echo"<button type='submit'><a href='cart.php?id=210'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat2\tv11.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          STEELHEART
        </h4>
                <h5>Price : 300</h5>
                <p class="card-text">
        Steelheart started off as a rock band called Red Alert whose members included James Ward (bass), Chris Risola (lead guitar), Jack Wilkenson (drums) and Miljenko Matijevic (vocals). Frank DiCostanzo joined as a rhythm guitarist and John Fowler replaced Jack Wilkenson. Steelheart released their self-titled debut album in 1990. The second single "I'll Never Let You Go (Angel Eyes)" reached No. 14 on the Billboard charts
        <br><br><br><br><br><br><br></p>
        <?php
				echo"<button type='submit'><a href='cart.php?id=211'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat2\tv12.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          ARROW
        </h4>
                <h5> Price: 450 </h5>
                <p class="card-text">
        Arrow is an American superhero television series developed by writer/producers Greg Berlanti, Marc Guggenheim, and Andrew Kreisberg. It is based on the DC Comics character Green Arrow, a costumed crime-fighter created by Mort Weisinger and George Papp. It premiered in the United States on The CW on October 10, 2012, with international broadcasting taking place in late 2012. Primarily filmed in Vancouver, British Columbia, Canada, the series follows billionaire playboy Oliver Queen (Stephen Amell), who, five years after being stranded on a hostile island, returns home to fight crime and corruption as a secret vigilante whose weapon of choice is a bow and arrow.
        <br><br></p>
         <?php
				echo"<button type='submit'><a href='cart.php?id=212'>Add To Cart</a></button>";
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