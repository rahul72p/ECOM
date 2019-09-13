<?php
include("databaseconnect.php");
?>

<html>
<body background="back.jpeg">

	<meta charset="UTF 8" />
	<head>
	<title>FICTION</title>
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
    </nav>
  -->
	
	<br>
	<h1>
	<center><font color="white">
	FICTION</font>
	</center></h1>
	<br>
	
	<div class="container">
	<div class="row">
	<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-200">
        <a href="#"><img class="card-img-top" src="cat5/f1.jpg" alt=""></a>
            <div class="card-body">
				<h4 class="card-title">
					Divergent
				</h4>
                <h5>Price : 500</h5>
                <p class="card-text">Divergent is a 2014 American dystopian science fiction action film directed by Neil Burger, based on the novel of the same name by Veronica Roth. The film is the first installment in The Divergent Series and was produced by Lucy Fisher, Pouya Shabazian, and Douglas Wick, with a screenplay by Evan Daugherty and Vanessa Taylor.
				<br><br></p>
			<?php
				echo"<button type='submit'><a href='cart.php?id=501'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat5/f2.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    Four
                  </h4>
                  <h5>Price : 300</h5>
                  <p class="card-text"> Four is a novel written by the American authors Ian Caldwell and Dustin Thomason, and published in 2004. Caldwell, a Princeton University graduate, and Thomason, a Harvard College graduate, are childhood friends who wrote the book after their graduations.
				  <br><br><br></p>
				 <?php
				echo"<button type='submit'><a href='cart.php?id=502'>Add To Cart</a></button>";
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
				<a href="#"><img class="card-img-top" src="cat5/f3.jpg" alt=""></a>
					<div class="card-body">
						<h4 class="card-title">
						The DA VINCI Code
						</h4>
						<h5>Price : 450</h5>
						<p class="card-text">The Da Vinci Code is a 2003 mystery-detective novel by Dan Brown. It follows symbologist Robert Langdon and cryptologist Sophie Neveu after a murder in the Louvre Museum in Paris causes them to become involved in a battle between the Priory of Sion and Opus Dei over the possibility of Jesus Christ having been a companion to Mary Magdalene.
						</p>
						<?php
				echo"<button type='submit'><a href='cart.php?id=503'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat5/f4.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    Carrie
                  </h4>
                  <h5>Price : 600</h5>
                  <p class="card-text">Carrie is a 2013 American supernatural horror film, directed by Kimberly Peirce, and is the third film adaptation of Stephen King's 1974 novel of the same name. The film was produced by Kevin Misher, with a screenplay by Lawrence D. Cohen & Roberto Aguirre-Sacasa.
				  <br><br><br><br></p>
<?php
				echo"<button type='submit'><a href='cart.php?id=504'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat5/f5.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    Harry Potter And The Chamber Of Sectets
                  </h4>
                  <h5>Price : 700</h5>
                  <p class="card-text">Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series. The plot follows Harry's second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the school's corridors warn that the "Chamber of Secrets"
				  </p>
<?php
				echo"<button type='submit'><a href='cart.php?id=505'>Add To Cart</a></button>";
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
                <a href="#"><img class="card-img-top" src="cat5/f6.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    Blood Warrior
                  </h4>
                  <h5>Price : 300</h5>
                  <p class="card-text">Blood Warrior, known in Japan as Ooedo Fight (大江戸ファイト Ooedo Faito), is a 1993 fighting arcade game developed by Atop and published by Kaneko. It is the successor to the 1992 fighting arcade game, Shogun Warriors, also developed by Atop and published by Kaneko.
				  <br><br><br><br></p>
				  <?php
				echo"<button type='submit'><a href='cart.php?id=506'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat5/f7.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          THE BOOK THIEF
        </h4>
                <h5>Price : 500</h5>
                <p class="card-text">
        The Book Thief is a 2005 historical novel by Australian author Markus Zusak and is his most popular work.Published in 2005, The Book Thief became an international bestseller and was translated into several languages. It was adapted into a 2013 feature film of the 
        <br><br><br><br><br><br></p>
        <?php
				echo"<button type='submit'><a href='cart.php?id=507'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat5/f8.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          DIARY OF THE WIMPY KID
        </h4>
                <h5>Price : 300</h5>
                <p class="card-text">
        Diary of a Wimpy Kid is a satirical realistic fiction comedy novel for children and teenagers written and illustrated by Jeff Kinney. It is the first book in the Diary of a Wimpy Kid series. The book is about a boy named Greg Heffley and his struggles to fit in as he begins middle school.Diary of a Wimpy Kid first appeared on FunBrain in 2004, where it was read 20 million times.[1] The abridged hardcover adaptation was released on April 1, 2007.
        <br><br></p>
        <?php
				echo"<button type='submit'><a href='cart.php?id=508'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat5/f9.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          THE LORD OF RINGS
        </h4>
                <h5>Price : 450</h5>
                <p class="card-text">
        The Lord of the Rings is a film series consisting of three high fantasy adventure films directed by Peter Jackson. They are based on the novel The Lord of the Rings by J. R. R. Tolkien. The films are subtitled The Fellowship of the Ring (2001), The Two Towers (2002) and The Return of the King (2003). They are a New Zealand-American venture produced by WingNut Films and The Saul Zaentz Company and distributed by New Line Cinema.
        <br><br><br></p>
        <?php
				echo"<button type='submit'><a href='cart.php?id=509'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat5/f10.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          RUNNING OUT OF NIGHT
        </h4>
                <h5>Price : 500</h5>
                <p class="card-text">
        Fans of Elijah of Buxton, Trouble Don't Last, and Stealing Freedom will be drawn to this tale of the incredible journey of an abused twelve-year-old white girl and an escaped slave girl who run away together and form a bond of friendship while seeking freedom.
        <br><br><br><br><br><br><br></p>
       <?php
				echo"<button type='submit'><a href='cart.php?id=510'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat5/f11.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          THE GIRL IN THE ICE
        </h4>
                <h5>Price : 300</h5>
                <p class="card-text">
        Her eyes are wide open. Her lips parted as if to speak. Her dead body frozen in the ice…She is not the only one. When a young boy discovers the body of a woman beneath a thick sheet of ice in a South London park, Detective Erika Foster is called in to lead the murder investigation. 
        <br><br><br><br><br><br><br></p>
       <?php
				echo"<button type='submit'><a href='cart.php?id=511'>Add To Cart</a></button>";
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
        <img class="card-img-top" src="cat5/f12.jpg" height="500" width="600" alt="">
            <div class="card-body">
        <h4 class="card-title">
          ONE INDIAN GIRL
        </h4>
                <h5>Price : 450</h5>
                <p class="card-text">
        One Indian Girl is the story of Radhika Mehta, a worker at the Distressed Debt group of Goldman Sachs, an investment bank. The book begins with Radhika making arrangements regarding her marriage with Brijesh Gulati who works in the Facebook company in San Francisco. She later reveals her childhood and life in Delhi, as a nerdy personality in contrast to her elder sister Aditi. She also communicates her thoughts and decisions to her inner judgemental voice, or "mini-me" as called.
        <br><br></p>
       <?php
				echo"<button type='submit'><a href='cart.php?id=512'>Add To Cart</a></button>";
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