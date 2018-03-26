<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
    <title>BookShaala: Search Books </title>

    <link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="themes/assets/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <!-- NAVBAR -->
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">BookShaala</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="search.php">Search</a></li>
                <li><a href="request.php">Request</a></li>
                <li><a href="sell.php">Sell</a></li>
                <li><a href="about.php">About Us</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;My Cart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>



	<div class="pageTitle jumbotron">
	  <div class="container">
	    <h2>Search Books</h2>
	  </div>
	  <div class="container">
	  	<p></p>
	  	<p>Look for all your favorite books here. You can view books by an specific author or by some subject.
	  	Sort the books in accordance with the price or alphabetically.</p>
	  </div>
	</div>
	


	<div class="highlightSection">
	<div class="container-fluid">
	<div class ="row">
		<!-- SIDENAV BAR -->
		<div class="col-lg-1"></div>
		<div class="col-lg-2 sidenav">
			<h2>Filter Books</h2>
			<ul class="list-group">
			 <a href="" style="color:#5a5a5a"><li class="list-group-item">New<span class="badge">12</span></li></a>
			 <a href="" style="color:#5a5a5a"><li class="list-group-item">Deleted<span class="badge">5</span></li></a>
			 <a href="" style="color:#5a5a5a"><li class="list-group-item">Warnings<span class="badge">3</span></li></a>
			</ul>	
		</div>

		<div class="col-lg-8">
		<!-- ROWS OF ELEMENTS-->
			
			<div class="row">
				<div class="col-lg-4">
				<div class="media">
					<a href="menu/"><img src="themes/assets/images/hp.jpg" style="width:200px;height:300px;"> </a>
					<h3 class="media-heading text-primary-theme">BOOK TITLE</h3>
					<p>JK ROWLING | Sci-Fi</p>
					<p><a class="btn btn-default" href="#" role="button">₹500 Add to cart &raquo;</a></p>
				</div>
				</div>

				<div class="col-lg-4">
				<div class="media">
					<a href="menu/"><img src="themes/assets/images/hp.jpg" style="width:200px;height:300px;"> </a>
					<h3 class="media-heading text-primary-theme">BOOK TITLE</h3>
					<p>JK ROWLING | Sci-Fi</p>
					<p><a class="btn btn-default" href="#" role="button">₹500 Add to cart &raquo;</a></p>
				</div>
				</div>

				<div class="col-lg-4">
				<div class="media">
					<a href="menu/"><img src="themes/assets/images/hp.jpg" style="width:200px;height:300px;"> </a>
					<h3 class="media-heading text-primary-theme">BOOK TITLE</h3>
					<p>JK ROWLING | Sci-Fi</p>
					<p><a class="btn btn-default" href="#" role="button">₹500 Add to cart &raquo;</a></p>
				</div>
				</div>		
			</div>
			<hr>

			<?php include "php/fetchbooks.php" ?>

		</div>
	</div>
	</div>
	</div>
	
	
    
    <div class="introSection">
        <div class="container">
        <div class="row">
        <div class="col-lg-5">
        <h3>Welcome to BookShaala</h3>
        <p>
        There are estimated to be nearly 13 million students studying in engineering colleges in India. And it wouldn't be wrong to say that they need their resources right and timely.
        <br><br>
        We at Bookshaala try to help you fellow scholars to get ahead in this game with all the book material you want. On your doorsteps.
        </p>
        </div>

        <div class="col-lg-4">
        <h3>Guaranteed <span style="color:#c83a3a">7</span>-day delivery</h3>
        <p>
        We value time as well as you do and we are working hard 24/7 to fullfill your dreams.
        <br><br>
        To keep up to our promise, we guarantee you a 7-day delivery. Else get your books for FREE.
        </p>

        </div>

        <div class="col-lg-3">
        <h3>Hand-picked Selections</h3>
        <p>
        We bring to you our "editor picks" of books from all the streams and departments on a special offer of 10% flat off.
        </p>

        </div>

        </div>
        </div>
    </div>


      <!-- FOOTER -->
      <footer>
        <div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Made With Love By <a href="about.php">Prakhar Vaish</a> </p>
        </div>
      </footer>



    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="themes/dist/js/bootstrap.min.js"></script>
    <script src="themes/assets/js/holder.js"></script>
  </body>
</html>