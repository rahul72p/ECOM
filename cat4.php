<?php
include("databaseconnect.php");
?>

<html>
<body background="back.jpeg">
	<meta charset="UTF 8" />
	<head>
	<title>
	BIOGRAPHY
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
    </nav>
	-->
	<br>
	<h1>
	<center><font color="white">
	BIOGRAPHY</font>
	</center></h1>
	<br>
	<div class="container">
	<div class="row">
	<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-200">
                <a href="#"><img class="card-img-top" src="cat4/b6.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    Playing It My Way
                  </h4>
                  <h5>Price : 300</h5>
                  <p class="card-text">Playing It My Way is the autobiography of former Indian cricketer Sachin Tendulkar. It was launched on 5 November 2014 in Mumbai. The book summarises Tendulkar's early days, his 24 years of international career and aspects of his life that have not been shared publicly.
				  <br><br><br><br></p>
				   <?php
				echo"<button type='submit'><a href='cart.php?id=401'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat4/b2.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    When The Laughter Stops
                  </h4>
                  <h5>Price : 300</h5>
                  <p class="card-text">When The Laughter Stops is a comedy double album by comedian Andrew Dice Clay, which was released in 1990. Produced by Rick Rubin whose concept was to record an unadvertised performance in a small club with a small crowd, many of whom would not necessarily be fans of Clay's act. Clay chose a New York club owned by comedian Rodney Dangerfield, Dangerfield's, to record during the holiday season.
				  </p>
				  <?php
				echo"<button type='submit'><a href='cart.php?id=402'>Add To Cart</a></button>";
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
				<a href="#"><img class="card-img-top" src="cat4/b3.jpg" alt=""></a>
					<div class="card-body">
						<h4 class="card-title">
							Gandhi Before India
						</h4>
						<h5>Price : 450</h5>
						<p class="card-text">Gandhi Before India is a 2013 book by the Indian historian Ramachandra Guha, the first part of a planned two-volume biography of Mohandas Karamchand Gandhi. The book deals with Gandhi's life up to his return to India following a 21-year period as a lawyer and civil-rights activist in South Africa.
						<br><br><br></p>
						<?php
				echo"<button type='submit'><a href='cart.php?id=403'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat4/b4.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    John Le Carre
                  </h4>
                  <h5>Price : 600</h5>
                  <p class="card-text">David John Moore Cornwell (born 19 October 1931) is best known by the pen name John le Carré (/lə ˈkɑːrˌeɪ/). He is a British author of espionage novels. During the 1950s and '60s, he worked for both the Security Service and the Secret Intelligence Service. His third novel, The Spy Who Came in from the Cold (1963)
				  <br><br><br><br></p>
				  <?php
				echo"<button type='submit'><a href='cart.php?id=404'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat4/b5.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    Thet Called Me GOD
                  </h4>
                  <h5>Price : 700</h5>
                  <p class="card-text">Harvey, now an octogenarian battling oral cancer and the effects of strokes, teams with veteran co-author Golenbock (Glory in the Fall: The Greatest Moments in World Series History, 2010, etc.) to produce a breezy and sometimes-grumpy memoir about his years in major league baseball.
				  <br><br><br><br><br></p>
				  <?php
				echo"<button type='submit'><a href='cart.php?id=405'>Add To Cart</a></button>";
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
        <a href="#"><img class="card-img-top" src="cat4/b1.jpg" alt=""></a>
            <div class="card-body">
				<h4 class="card-title">
				The Life
				</h4>
                <h5>Price : 500</h5>
                <p class="card-text">The Life is a musical with a book by David Newman, Ira Gasman and Cy Coleman, music by Coleman, and lyrics by Gasman.Based on an original idea by Gasman, the show explores the underbelly of Times Square's 42nd Street, inhabited by pimps and prostitutes, druggies and dealers, and runaways and street people in the era prior to its Disneyfication.
				<br><br><br></p>
				<?php
				echo"<button type='submit'><a href='cart.php?id=406'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat4/b7.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          WAYLON
        </h4>
                <h5>Price : 500</h5>
                <p class="card-text">
        Willem Bijkerk (Dutch pronunciation: [ˈʋɪləm ˈbɛikɛrk]; born 20 April 1980), known professionally as Waylon, is a Dutch singer. His stage name came from the name of his idol Waylon Jennings. He represented the Netherlands with Ilse DeLange as The Common Linnets at the Eurovision Song Contest 2014, finishing in second place in the final[1] and will return as a solo act to represent the Netherlands again in the Eurovision Song Contest 2018.
        <br><br><br><br><br><br></p>
        <?php
				echo"<button type='submit'><a href='cart.php?id=407'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat4/b8.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          APJ ABDUL KALAM
        </h4>
                <h5>Price : 300</h5>
                <p class="card-text">
        Avul Pakir Jainulabdeen Abdul Kalam better known as A. P. J. Abdul Kalam (/ˈæbdʊl kəˈlɑːm/ (About this sound listen); 15 October 1931 – 27 July 2015), was the 11th President of India from 2002 to 2007. A career scientist turned statesman, Kalam was born and raised in Rameswaram, Tamil Nadu, and studied physics and aerospace engineering. He spent the next four decades as a scientist and science administrator, mainly at the Defence Research and Development Organisation (DRDO) and Indian Space Research Organisation (ISRO)
        <br><br><br><br></p>
       <?php
				echo"<button type='submit'><a href='cart.php?id=408'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat4/b9.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          STEVE JOBS
        </h4>
                <h5>Price : 450</h5>
                <p class="card-text">
       Steven Paul Jobs was an American entrepreneur, business magnate, inventor, and industrial designer. He was the chairman, chief executive officer (CEO), and a co-founder of Apple Inc., CEO and majority shareholder of Pixar, a member of The Walt Disney Company's board of directors following its acquisition of Pixar, and the founder, chairman, and CEO of NeXT. Jobs and Apple co-founder Steve Wozniak are widely recognized as pioneers of the microcomputer revolution of the 1970s and 1980s.
        <br><br><br><br><br></p>
       <?php
				echo"<button type='submit'><a href='cart.php?id=409'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat4/b10.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          JAGGER
        </h4>
                <h5>Price : 500</h5>
                <p class="card-text">
        Sir Michael Philip Jagger (born 26 July 1943) is an English singer-songwriter, multi-instrumentalist, composer and actor who gained fame as the lead singer and one of the founder members of the Rolling Stones. Jagger's career has spanned over five decades, and he has been described as "one of the most popular and influential frontmen in the history of rock & roll"
        <br><br><br><br><br><br><br></p>
       <?php
				echo"<button type='submit'><a href='cart.php?id=410'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat4/b11.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          NARENDRA MODI
        </h4>
                <h5>Price : 300</h5>
                <p class="card-text">
        Narendra Damodardas Modi (Gujarati: [ˈnəɾeːnd̪rə d̪aːmoːd̪əɾˈd̪aːs ˈmoːd̪iː] (About this sound listen); born 17 September 1950) is an Indian politician who is the 16th and current Prime Minister of India, in office since May 2014. He was the Chief Minister of Gujarat from 2001 to 2014, and is the Member of Parliament for Varanasi. Modi, a member of the Bharatiya Janata Party (BJP), is a Hindu nationalist and member of the right-wing Rashtriya Swayamsevak Sangh (RSS).
        <br><br><br><br><br></p>
        <?php
				echo"<button type='submit'><a href='cart.php?id=411'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat4/b12.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          THE MAN WHO KNEW
        </h4>
                <h5>Price : 450</h5>
                <p class="card-text">
        The film stars Dev Patel as Srinivasa Ramanujan, a real-life mathematician who after growing up poor in Madras, India, earns admittance to Cambridge University during World War I, where he becomes a pioneer in mathematical theories with the guidance of his professor, G. H. Hardy, portrayed by Jeremy Irons.Filming began in August 2014 at Trinity College, Cambridge.
        <br><br><br><br><br><br><br></p>
       <?php
				echo"<button type='submit'><a href='cart.php?id=412'>Add To Cart</a></button>";
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