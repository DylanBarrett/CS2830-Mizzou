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
	<title>About Baseball</title>
	<link rel="stylesheet" type="text/css" href="/CS2830 Final/CSS/AboutBaseball.css">
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
	<div class="container">
	
	<h1>About Baseball</h1>
		
	<p>Click on the video below to see a brief history of Baseball. If the video doesn't work visit <a href="https://www.youtube.com/watch?v=uHVS3GGEaW4"> Youtube </a> to see it.</p>
		
        <div class="img-responsive">
        <iframe src="https://www.youtube.com/embed/uHVS3GGEaW4" height="500px" width="1150px" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>

	<div id="HistoryWrapper" class="group">
		<h3>Visit the Links below to see more about the history of Baseball and some of the milestones/records it holds.</h3>
		
	
	<div class="column firstRow">
	<a href="https://en.wikipedia.org/wiki/Major_League_Baseball" target="_blank">Major League Baseball History</a>
		
	</div>
	
	<div class="column firstRow middleItem">
	<p>To search for your favorite players, batting and pitching leaders and more click the link below.</p>
	<a href="http://mlb.mlb.com/mlb/history/" target="_blank">More History</a>
	</div>
	<br>
	
	<div class="column firstRow">
	<p>To see the players and teams who hold the all time records for various stats click <a href="https://en.wikipedia.org/wiki/List_of_Major_League_Baseball_record_holders" target="_blank">Here.</a></p>
	</div>
	</div><!-- end of History wrapper div-->
	</div><!-- end of bootstrap container -->
</body>
</html>