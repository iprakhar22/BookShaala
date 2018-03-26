<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
    <title>BookShaala: My Cart </title>

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
                <li><a href="search.php">Search</a></li>
                <li><a href="request.php">Request</a></li>
                <li><a href="sell.php">Sell</a></li>
                <li><a href="about.php">About Us</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;My Cart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>



	<div class="pageTitle jumbotron">
	  <div class="container">
	    <h2>My Cart</h2>
	  </div>
	  <div class="container">
	  	<p></p>
	  	<p>Here are all your carted items. Buy or Rent any of these books and we guarantee to deliver them to your footsteps within a few days.</p>
	  </div>
	</div>

    <!-- Carted elements -->
    <div class='container-fluid'>
    <div class="col-md-1">
    </div>
    <div class="col-md-11">
      <hr>

      <div class="row">
      <div class="col-md-2">
          <div class="checkbox">
            <input type="checkbox" id='selection'><img src="themes/assets/images/hp.jpg" style="width:100px;height:150px;">
          </div>
      </div>
      <div class="col-md-9">
          <h2>SOME TITLE</h2>
          <p>SOME AUTHOR ETC</p>
          <p>₹500</p>
      </div>
      </div>

<?php include"php/fetchcart.php"; ?>

    </div>
    </div>
    <!-- END elements -->


    <div class="container">
    <a class="btn btn-danger" href="#" role="button"><h4>Buy Selected</h4></a>
    <a class="btn btn-danger" href="#" role="button"><h4>Rent Selected</h4></a>
    </div>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


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
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </div>
    </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="themes/dist/js/bootstrap.min.js"></script>
    <script src="themes/assets/js/holder.js"></script>
  </body>
</html>

