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
	<title>My Current Favorite Players</title>
	<link rel="stylesheet" type="text/css" href="/CS2830 Final/CSS/FavPlayers.css">
	<link rel="stylesheet" type="text/css" href="/CS2830 Final/CSS/Header.css">
	<script src="/CS2830 Final/JavaScript/TogglePlayers.js"></script>
	
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
        <div id="Current" class="container">
		<h1>My Current Favorite Players</h1>
		
<!-- buttons for the individual positions-->
		<!-- button for catcher-->
<a href="#popup1">
	<button class="Catcher"></button></a>
<div id="popup1" class="overlay">
	<div class="popup">
		<table>
		<h2>Catchers</h2>
			<a class="close" href="#">&times;</a>
				<div class="content">
                       <ol>
						   <h3>1. Yadier Molina</h3> <img class="ModalPic" src="../Images/Catchers/Yadi.jpg"><br>
						   <h3>2. Buster Posey</h3> <img class="ModalPic" src="../Images/Catchers/buster.jpg"><br>
						   <h3>3. Wilson Contreras</h3> <img class="ModalPic" src="../Images/Catchers/wilson.jpg"><br>
						   <h3>4. Gary Sanchez</h3> <img class="ModalPic" src="../Images/Catchers/gary.jpg"><br>
						   <h3>5. Salvador Perez</h3> <img class="ModalPic" src="../Images/Catchers/salvador.jpg"><br>
						</ol>
				</div>
		</table>
	</div>
</div>
	
<!-- button for First Base-->
<a href="#popup2">
	<button class="First"></button></a>
<div id="popup2" class="overlay">
	<div class="popup">
		<table>
			<h2>First Base</h2>
				<a class="close" href="#">&times;</a>
					<div class="content">
                       <ol>
						   <h3>1. Paul Goldschmidt</h3> <img class="ModalPic" src="../Images/First/Goldy.jpg"><br>
						   <h3>2. Cody Bellinger</h3> <img class="ModalPic" src="../Images/First/Bellinger.jpg"><br>
						   <h3>3. Anthony Rizzo</h3> <img class="ModalPic" src="../Images/First/Rizzo.jpg"><br>
						   <h3>4. Freddie Freeman</h3> <img class="ModalPic" src="../Images/First/Freeman.jpg"><br>
						   <h3>5. Albert Pujols</h3> <img class="ModalPic" src="../Images/First/Pujols.jpg"><br>
						</ol>
					</div>
			</table>
	</div>
</div>
		
<!-- button for Second Base-->
<a href="#popup3">
	<button class="Second"></button></a>
<div id="popup3" class="overlay">
	<div class="popup">
		<table>
		<h2>Second Base</h2>
			<a class="close" href="#">&times;</a>
				<div class="content">
                       <ol>
						   <h3>1. Jose Altuve</h3> <img class="ModalPic" src="../Images/Second/Altuve.jpg"><br>
						   <h3>2. Jonathan Schoop</h3> <img class="ModalPic" src="../Images/Second/Schoop.jpg"><br>
						   <h3>3. Robinson Cano</h3> <img class="ModalPic" src="../Images/Second/Cano.jpg"><br>
						   <h3>4. Javier Baez</h3> <img class="ModalPic" src="../Images/Second/Baez.jpg"><br>
						   <h3>5. Paul Dejong</h3> <img class="ModalPic" src="../Images/Second/Dejong.jpg"><br>
						</ol>
				</div>
		</table>
	</div>
</div>
		
<!-- button for Third Base-->		
<a href="#popup4">
	<button class="Third"></button></a>
<div id="popup4" class="overlay">
	<div class="popup">
		<table>
			<h2>Third Base</h2>
				<a class="close" href="#">&times;</a>
					<div class="content">
                       <ol>
						   <h3>1. Kris Bryant</h3> <img class="ModalPic" src="../Images/Third/Bryant.jpg"><br>
						   <h3>2. Nolan Arenado</h3> <img class="ModalPic" src="../Images/Third/Arenado.jpg"><br>
						   <h3>3. Manny Machado</h3> <img class="ModalPic" src="../Images/Third/Machado.jpg"><br>
						   <h3>4. Alex Bregman</h3> <img class="ModalPic" src="../Images/Third/Bregman.jpg"><br>
						   <h3>5. Adrian Beltre</h3> <img class="ModalPic" src="../Images/Third/Beltre.jpg"><br>
						</ol>
					</div>
		</table>
	</div>
</div>
		
<!-- button for Shortstop-->
<a href="#popup5">
			<button class="SS"></button></a>
<div id="popup5" class="overlay">
	<div class="popup">
		<table>
			<h2>Shortstop</h2>
				<a class="close" href="#">&times;</a>
					<div class="content">
                       <ol>
						   <h3>1. Carlos Correa</h3> <img class="ModalPic" src="../Images/Short/Correa.jpg"><br>
						   <h3>2. Trea Turner</h3> <img class="ModalPic" src="../Images/Short/Trea.jpg"><br>
						   <h3>3. Corey Seager</h3> <img class="ModalPic" src="../Images/Short/Seager.jpg"><br>
						   <h3>4. Fransico Lindor</h3> <img class="ModalPic" src="../Images/Short/Lindor.jpg"><br>
						   <h3>5. Xander Bogaerts</h3> <img class="ModalPic" src="../Images/Short/Xander.jpg"><br>
						</ol>
                    </div>
		</table>
	</div>
</div>
		
		<!-- button for Left Field-->
<a href="#popup6">
	<img class="LF" src="../Images/ball.png" alt="LF" height="30" width="40"></a>
<div id="popup6" class="overlay">
	<div class="popup">
		<table>
			<h2>Left Field</h2>
				<a class="close" href="#">&times;</a>
					<div class="content">
                       <ol>
						   <h3>1. Yoenis Cespedes</h3> <img class="ModalPic" src="../Images/Left/Cespedes.jpg"><br>
						   <h3>2. Andrew Benintendi</h3> <img class="ModalPic" src="../Images/Left/Benintendi.jpg"><br>
						   <h3>3. Marcell Ozuna</h3> <img class="ModalPic" src="../Images/Left/Ozuna.jpg"><br>
						   <h3>4. Ryan Braun</h3> <img class="ModalPic" src="../Images/Left/Braun.jpg"><br>
						   <h3>5. Justin Upton</h3> <img class="ModalPic" src="../Images/Left/Upton.jpg"><br>
						</ol>
                    </div>
		</table>
	</div>
</div>
		
<!-- button for Center Field-->
<a href="#popup7">
	<img class="CF" src="../Images/ball.png" alt="CF" height="30" width="40"></a>
<div id="popup7" class="overlay">
	<div class="popup">
		<table>
			<h2>Center Field</h2>
				<a class="close" href="#">&times;</a>
					<div class="content">
                       <ol>
						   <h3>1. Mike Trout</h3> <img class="ModalPic" src="../Images/Center/Trout.jpg"><br>
						   <h3>2. George Springer</h3> <img class="ModalPic" src="../Images/Center/Springer.jpg"><br>
						   <h3>3. Christian Yelich</h3> <img class="ModalPic" src="../Images/Center/Yelich.jpg"><br>
						   <h3>4. Andrew McCutchen</h3> <img class="ModalPic" src="../Images/Center/McCutchen.jpg"><br>
						   <h3>5. Tommy Pham</h3> <img class="ModalPic" src="../Images/Center/Pham.jpg"><br>
						</ol>
                    </div>
		</table>
	</div>
</div>
		
		<!-- button for Right Field-->
<a href="#popup8">
	<img class="RF" src="../Images/ball.png" alt="RF" height="30" width="40"></a>
<div id="popup8" class="overlay">
	<div class="popup">
		<table>
		<h2>Right Field</h2>
			<a class="close" href="#">&times;</a>
				<div class="content">
                       <ol>
						   <h3>1. Bryce Harper</h3> <img class="ModalPic" src="../Images/Right/Harper.jpg"><br>
						   <h3>2. Mookie Betts</h3> <img class="ModalPic" src="../Images/Right/Betts.jpg"><br>
						   <h3>3. Giancarlo Stanton</h3> <img class="ModalPic" src="../Images/Right/Stanton.jpg"><br>
						   <h3>4. Aaron Judge</h3> <img class="ModalPic" src="../Images/Right/Judge.jpg"><br>
						   <h3>5. J.D. Martinez</h3> <img class="ModalPic" src="../Images/Right/JD.jpg"><br>
						</ol>
				</div>
		</table>
	</div>
</div>
		
		<!-- button for Starting Pitchers-->
<a href="#popup9">
	<button class="SP"></button></a>
<div id="popup9" class="overlay">
	<div class="popup">
		<table>
		<h2>Starting Pitchers</h2>
			<a class="close" href="#">&times;</a>
				<div class="content">
                       <ol>
						   <h3>1. Clayton Kershaw</h3> <img class="ModalPic" src="../Images/Starting/Kersh.jpg"><br>
						   <h3>2. Max Scherzer</h3> <img class="ModalPic" src="../Images/Starting/Scherzer.jpg"><br>
						   <h3>3. Chris Sale</h3> <img class="ModalPic" src="../Images/Starting/Sale.jpg"><br>
						   <h3>4. Noah Syndergaard</h3> <img class="ModalPic" src="../Images/Starting/Thor.jpg"><br>
						   <h3>5. Corey Kluber</h3> <img class="ModalPic" src="../Images/Starting/Kluber.jpg"><br>
						   <h3>6. Stephen Strasburg</h3> <img class="ModalPic" src="../Images/Starting/Stras.jpg"><br>
						   <h3>7. Justin Verlander</h3> <img class="ModalPic" src="../Images/Starting/Verlander.jpg"><br>
						   <h3>8. Jake Arrieta</h3> <img class="ModalPic" src="../Images/Starting/Jake.jpg"><br>
						   <h3>9. Madison Bumgarner</h3> <img class="ModalPic" src="../Images/Starting/Bum.jpg"><br>
						   <h3>10. Dallas Keuchel</h3> <img class="ModalPic" src="../Images/Starting/Dallas.jpg"><br>
						</ol>
				</div>
		</table>
	</div>
</div>
		
		<!-- button for Relief Pitchers-->
<a href="#popup10">
	<img class="RP" src="../Images/ball.png" alt="RP" height="30" width="40"></a>
<div id="popup10" class="overlay">
	<div class="popup">
		<table>
		<h2>Relief Pitchers</h2>
			<a class="close" href="#">&times;</a>
				<div class="content">
                       <ol>
						   <h3>1. Aroldis Chapman</h3> <img class="ModalPic" src="../Images/Relief/Chap.jpg"><br>
						   <h3>2. Kenley Jansen</h3> <img class="ModalPic" src="../Images/Relief/Kenley.jpg"><br>
						   <h3>3. Andrew Miller</h3> <img class="ModalPic" src="../Images/Relief/Miller.jpg"><br>
						   <h3>4. Zach Britton</h3> <img class="ModalPic" src="../Images/Relief/Zach.jpg"><br>
						   <h3>5. Craig Kimbrel</h3> <img class="ModalPic" src="../Images/Relief/Kimbrel.jpg"><br>
						</ol>
				</div>
		</table>
	</div>
</div>
		
		<!-- button for Manager-->
<a href="#popup11">
	<img class="Manager" src="../Images/ball.png" alt="Manager" height="30" width="40"></a>
<div id="popup11" class="overlay">
	<div class="popup">
		<table>
			<h2>Managers</h2>
				<a class="close" href="#">&times;</a>
					<div class="content">
                       <ol>
						   <h3>1. Joe Maddon</h3> <img class="ModalPic" src="../Images/Manager/Maddon.jpeg"><br>
						   <h3>2. Mike Matheny</h3> <img class="ModalPic" src="../Images/Manager/Matheny.jpeg"><br>
						   <h3>3. Terry Francona</h3> <img class="ModalPic" src="../Images/Manager/Francona.jpg"><br>
						   <h3>4. Bruce Bochy</h3> <img class="ModalPic" src="../Images/Manager/Bruce.jpg"><br>
						   <h3>5. Buck Showalter</h3> <img class="ModalPic" src="../Images/Manager/Buck.jpg"><br>
						</ol>
                    </div>
		</table>
    </div>
</div>
		
		<!-- button for Mascot-->
<a href="#popup12">
	<img class="Mascot" src="../Images/ball.png" alt="Mascot" height="30" width="40"></a>
<div id="popup12" class="overlay">
	<div class="popup">
		<table>
			<h2>Mascots</h2>
				<a class="close" href="#">&times;</a>
					<div class="content">
                       <ol>
						   <h3>1. Philly Phanatic</h3> <img class="ModalPic" src="../Images/Mascot/Phantic.jpg"><br>
						   <h3>2. Orbit</h3> <img class="ModalPic" src="../Images/Mascot/Orbit.jpg"><br>
						   <h3>3. Slugger</h3> <img class="ModalPic" src="../Images/Mascot/Slugger.jpg"><br>
						   <h3>4. Fredbird</h3> <img class="ModalPic" src="../Images/Mascot/fredbird.jpg"><br>
						   <h3>5. Mariner Moose</h3> <img class="ModalPic" src="../Images/Mascot/Moose.jpg"><br>
						</ol>
					</div>
		</table>
	</div>
</div>
			
			<div id="myButton">
    <input type="button" class="buttons" value="My All-Time Favorite Players" onclick="AllTime()">
			</div>
    </div><!-- close of bootstrap container-->
</body>
</html>