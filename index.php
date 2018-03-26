<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
    <title>BookShaala: Your go-to Bookstore </title>

    <link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="themes/assets/css/carousel.css" rel="stylesheet">

    <!-- Google map api from developers.google.com -->
    <script>
      var map;
      var infoWindow;
      var service;

      function initMap() {
        map = new google.maps.Map(document.getElementById('googleMap'), {
          center: {lat: 28.630, lng: 77.371},
          zoom: 14,
          styles: [{
            stylers: [{ visibility: 'simplified' }]
          }, {
            elementType: 'labels'
          }]
        });

        infoWindow = new google.maps.InfoWindow();
        service = new google.maps.places.PlacesService(map);

        map.addListener('idle', performSearch);
      }

      function performSearch() {
        var request = {
          bounds: map.getBounds(),
          keyword: 'libraries'
        };
        service.radarSearch(request, callback);
      }

      function callback(results, status) {
        if (status !== google.maps.places.PlacesServiceStatus.OK) {
          console.error(status);
          return;
        }
        for (var i = 0, result; result = results[i]; i++) {
          addMarker(result);
        }
      }

      function addMarker(place) {
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          service.getDetails(place, function(result, status) {
            if (status !== google.maps.places.PlacesServiceStatus.OK) {
              console.error(status);
              return;
            }
            infoWindow.setContent(result.name);
            infoWindow.open(map, marker);
          });
        });
      }
    </script>

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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="search.php">Search</a></li>
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


    <!-- Carousel
    ================================================== -->
    <div id="mainCarousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
        <div class="item active">
             <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRTF9zhjUAcLmc1AXY-qPwYeZrraX-mYU&libraries=places&callback=initMap" async defer></script>

            <div id="googleMap" style="height:450px;"></div>
              <div class="container">
                <div class="carousel-caption">
                  <a class="btn btn-lg btn-default" href="search.php" role="button" style="font-size:2em">Order Online Now &raquo;</a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.carousel -->
    </div>

    <div class="mainTitle">
    <div class="container">
    <h2 style="color:#c83a3a">BookShaala.com</h2>
    <p style="color:#5a5a5a">
    Your Go-To Engineering Book Buying/Renting/Selling Service.
    </p>
    </div>
    </div>

    <h2 class="itemsTitle">Our All-Time Best Sellers</h2>

    <!-- Highlighted products -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="themes/assets/images/optics.jpg">
          <h2>OPTICS-II</h2>
          <p>Ajoy Ghatak | Physics</p>
          <p><a class="btn btn-default" href="#" role="button">₹500 Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="themes/assets/images/8051.jpg">
          <h2>The 8051 Microcontroller and Embedded Systems</h2>
          <p>Badri Ram | Electronics </p>
          <p><a class="btn btn-default" href="#" role="button">₹420 Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img style="width:408px;height:500px;" class="img-circle" src="themes/assets/images/java.jpeg" >
          <h2>Programming with JAVA</h2>
          <p>E Balagurusamy | CS </p>
          <p><a class="btn btn-default" href="#" role="button">₹670 Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>
    

    
    
    <div class="introSection">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="cntr"> Hand-picked books for all your A's in exams.<br>Chosen by you. For you. </h1>
            </div>
        </div>
        </div>
    </div>
    
    
    
    
     <div class="container marketing">
    <h2 class="itemsTitle">Computer Sciences</h2>
    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
            <div class="col-lg-4">
              <img src="themes/assets/images/java.jpeg" style="width:230px;height:300px;">
              <h4>Programming with JAVA</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/c.jpg" style="width:230px;height:300px;">
              <h4>Let Us C</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/neural.jpg" style="width:230px;height:300px;">
              <h4>Neural Networks Demystified</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
         </div><!-- /.row -->
        </div>

        <div class="item">
         <div class="row">
            <div class="col-lg-4">
              <img src="themes/assets/images/java.jpeg" style="width:230px;height:300px;">
              <h4>Programming with JAVA</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/c.jpg" style="width:230px;height:300px;">
              <h4>Let Us C</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/neural.jpg" style="width:230px;height:300px;">
              <h4>Neural Networks Demystified</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
         </div><!-- /.row -->
        </div>

        <div class="item">
         <div class="row">
            <div class="col-lg-4">
              <img src="themes/assets/images/c.jpg" style="width:230px;height:300px;">
              <h4>Let Us C</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/java.jpeg" style="width:230px;height:300px;">
              <h4>Programming with JAVA</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/neural.jpg" style="width:230px;height:300px;">
              <h4>Neural Networks Demystified</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
         </div><!-- /.row -->
        </div>

      </div>
      <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    </div>
    
    <div class="container marketing">
    <h2 class="itemsTitle">Electronics</h2>
    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
            <div class="col-lg-4">
              <img src="themes/assets/images/8051.jpg" style="width:230px;height:300px;">
              <h4>The 8051 Microcontroller and Embedded Systems</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/hp.jpg" style="width:230px;height:300px;">
              <h4>Signals Systems and Processing</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/hp.jpg" style="width:230px;height:300px;">
              <h4>Images and Image Signals</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
         </div><!-- /.row -->
        </div>

        <div class="item">
         <div class="row">
            <div class="col-lg-4">
              <img src="themes/assets/images/8051.jpeg" style="width:230px;height:300px;">
              <h4>The 8051 Microcontroller and Embedded Systems</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/hp.jpg" style="width:230px;height:300px;">
              <h4>Images and Image Signals</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/hp.jpg" style="width:230px;height:300px;">
              <h4>Sigals Systems and Processing</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
         </div><!-- /.row -->
        </div>

        <div class="item">
         <div class="row">
            <div class="col-lg-4">
              <img src="themes/assets/images/hp.jpg" style="width:230px;height:300px;">
              <h4>Images and Image Signals</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/hp.jpg" style="width:230px;height:300px;">
              <h4>Sigals Systems and Processing</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/hp.jpg" style="width:230px;height:300px;">
              <h4>The 8051 Microcontroller and Embedded Systems</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
         </div><!-- /.row -->
        </div>

      </div>
      <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    </div>
    
        <div class="container marketing">
    <h2 class="itemsTitle">Physics</h2>
    <div id="myCarousel3" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
            <div class="col-lg-4">
              <img src="themes/assets/images/hp.jpg" style="width:230px;height:300px;">
              <h4>Concepts Of Physics</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/optics.jpg" style="width:230px;height:300px;">
              <h4>OPTICS - II</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/hp.jpg" style="width:230px;height:300px;">
              <h4>Modern Physics - A Complete Guide</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
         </div><!-- /.row -->
        </div>

        <div class="item">
         <div class="row">
            <div class="col-lg-4">
              <img src="themes/assets/images/optics.jpg" style="width:230px;height:300px;">
              <h4>OPTICS - II</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/hp.jpg" style="width:230px;height:300px;">
              <h4>Concepts Of Physics</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/hp.jpg" style="width:230px;height:300px;">
              <h4>Modern Physics - A Complete Guide</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
         </div><!-- /.row -->
        </div>

        <div class="item">
         <div class="row">
            <div class="col-lg-4">
              <img src="themes/assets/images/optics.jpg" style="width:230px;height:300px;">
              <h4>OPTICS - II</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/hp.jpg" style="width:230px;height:300px;">
              <h4>Modern Physics - A Complete Guide</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="themes/assets/images/hp.jpg" style="width:230px;height:300px;">
              <h4>Concepts Of Physics</h4>
              <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
         </div><!-- /.row -->
        </div>

      </div>
      <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    </div>
    

    <div class="highlightSection">
    <div class="container">
    <div class="row">
        <div class="col-lg-4">
        <div class="media">
            <h4>Best Seller</h4>
            <a href="menu/"><img src="themes/assets/images/memory.jpg" style="width:270px;height:330px;"> </a>
            <h3 class="media-heading text-primary-theme">Memory : A psychological view</h3>
            <p>J K Simmons | Psychology</p>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="media">
          <h4>Best Seller</h4>
          <a href="menu/"><img src="themes/assets/images/database.jpg" style="width:270px;height:330px;"> </a>                        
          <h3 class="media-heading text-danger-theme">Databases And PHP</h3>
          <p>D L Singh | CS </p>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="media">
          <h4>Best Seller</h4>
          <a href="menu/"><img src="themes/assets/images/genetics.jpg" style="width:270px;height:330px;"> </a>
          <h3 class="media-heading">Genetics - 3rd Edition</h3>
          <p>Thomas Cormen | Biotechnology</p>
        </div>
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


   <div class="container marketing">
   <div id="myCarousel4" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
      <div class="item active">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Databases And PHP<span class="text-muted"> By D L Singh</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img src="themes/assets/images/database.jpg" style="width:300px;height:365px;">
        </div>
      </div>
      </div>

      
    <div class="item">
      <div class="row featurette">
        <div class="col-md-5">
          <img src="themes/assets/images/optics.jpg" style="width:300px;height:365px;">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Optics - II <span class="text-muted"> By Ajoy Ghatak</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>
      </div>


    <div class="item">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"> Algorithms and Data Structures- 3rd Edition <span class="text-muted"> By Thomas H. Cormen</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="img-circle" src="themes/assets/images/hp.jpg" style="width:300px;height:365px;">
        </div>
      </div>
      </div>
       </div>
    </div>    
    </div>
      <!-- /END THE FEATURETTES -->


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
