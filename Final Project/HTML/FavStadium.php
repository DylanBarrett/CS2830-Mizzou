<!-- 
	Dylan Barrett
	Dcbk34
	4/7/18
	CS 2830 Final Project
-->
<?php
	$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
	
	if (!$username) {
		header("Location: login.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Favorite Stadiums</title>
	<link rel="stylesheet" type="text/css" href="/CS2830 Final/CSS/FavStadium.css">
	<link rel="stylesheet" type="text/css" href="/CS2830 Final/CSS/Header.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<body id="background">
    <?php 
		require('header');
		?>
    <section class="block">
    <div class="container">
		<h1>My Favorite Stadiums</h1>
    <hr>
	
<!-- Slideshow container -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
    <li data-target="#myCarousel" data-slide-to="9"></li>
    <li data-target="#myCarousel" data-slide-to="10"></li>
    <li data-target="#myCarousel" data-slide-to="11"></li>
    <li data-target="#myCarousel" data-slide-to="12"></li>
    <li data-target="#myCarousel" data-slide-to="13"></li>
    <li data-target="#myCarousel" data-slide-to="14"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
      <div class="item active">
      <img src="../Images/Stadium/angels.jpg" class="img-responsive" alt="Angels Stadium">
        <div class="PicText">
			<h3>Angels Stadium</h3>
        	<p>Anahiem, California</p>
		  </div>
    </div>

      <div class="item">
      <img src="../Images/Stadium/cubs.jpg" class="img-responsive" alt="Chicago, Wrigley Field">
        <div class="PicText">
		<h3>Wrigley Field</h3>
        <p>Chicago, Illinois</p>
    </div>
	  </div>

      <div class="item">
      <img src="../Images/Stadium/dbacks.jpg" class="img-responsive" alt="Arizona, Chase Field">
        <div class="PicText">
		<h3>Chase Field</h3>
        <p>Phoenix Arizona</p>
    </div>
	  </div>
	  
      <div class="item">
      <img src="../Images/Stadium/dodger.jpg" class="img-responsive" alt="Los Angeles, Dodger Stadium">
          <div class="PicText">
		  <h3>Dodger Stadium</h3>
          <p>Los Angeles, California</p>
    </div>
	  </div>
	  
      <div class="item">
      <img src="../Images/Stadium/fenway.jpg" class="img-responsive" alt="Boston, Fenway Park">
          <div class="PicText">
			  <h3>Fenway Park</h3>
          	  <p>Boston Massachusetts</p>
		  </div>
    </div>
      
      <div class="item">
      <img src="../Images/Stadium/Giants.jpg" class="img-responsive" alt="San Fransico, AT&T Park">
          <div class="PicText">
		  <h3>AT&ampT Park</h3>
          <p>San Fransico, California</p>
    </div>
	  </div>
      
      <div class="item">
      <img src="../Images/Stadium/houston.jpg" class="img-responsive" alt="Houston, Minute Maid Park">
          <div class="PicText">
			  <h3>Minute Maid Park</h3>
              <p>Houston, Texas</p>
    	  </div>
	  </div>
	  
      <div class="item">
      <img src="../Images/Stadium/kc.jpg" class="img-responsive" alt="Kansas City, Kauffman Stadium">
          <div class="PicText">
			  <h3>Kauffman Stadium</h3>
              <p>Kansas City, Missouri</p>
		  </div>
    </div>
      
      <div class="item">
      <img src="../Images/Stadium/marlins.jpg" class="img-responsive" alt="Miami, Marlins Park">
          <div class="PicText">
	      <h3>Marlins Park</h3>
          <p>Miami, Florida</p>
		  </div>
    </div>
      
      <div class="item">
      <img src="../Images/Stadium/nats.jpg" class="img-responsive" alt="Washington, Nationals Park">
          <div class="PicText">
		  <h3>Nationals Park</h3>
          <p>Washington, D.C.</p>
		  </div>
    </div>
	  
      <div class="item">
      <img src="../Images/Stadium/phillies.jpg" class="img-responsive" alt="Philadelphia, Citizens Bank Park">
          <div class="PicText">
		  <h3>Citizens Bank Park</h3>
          <p>Philadelphia, Pennslyvania</p>
		  </div>
    </div>
	  
      <div class="item">
      <img src="../Images/Stadium/pirates.jpg" class="img-responsive" alt="Pittsburgh, PNC Park">
          <div class="PicText">
		  <h3>PNC Park</h3>
          <p>Pittsburgh, Pennsylvania</p>
		  </div>
    </div>
	  
      <div class="item">
      <img src="../Images/Stadium/rockies.jpg" class="img-responsive" alt="Colorado, Coors Field">
          <div class="PicText">
		  <h3>Coors Field</h3>
          <p>Denver, Colorado</p>
		  </div>
    </div>
	  
      <div class="item">
      <img src="../Images/Stadium/stl.jpg" class="img-responsive" alt="St.Louis, Busch Stadium">
          <div class="PicText">
  		  <h3>Busch Stadium</h3>
          <p>St. Louis, Missouri</p>
		  </div>
    </div>
		  
      <div class="item">
      <img src="../Images/Stadium/yankee.jpg" class="img-responsive" alt="New York, Yankee Stadium">
          <div class="PicText">
		  <h3>Yankee Stadium</h3>
          <p>Bronx, New York</p>
		  </div>  
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div> <!--close of bootstrap container-->
    </section>
</body>
</html>