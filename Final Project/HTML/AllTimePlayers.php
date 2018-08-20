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
	<title>My All-Time Favorite Players</title>
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
        <div id="AllTime">
        <div class="container">
		<h1>My All-Time Favorite Players</h1>
		
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
						   <h3>1. Jorge Posada</h3> <img class="ModalPic" src="../Images/Catchers/Jorge.jpg"><br>
						   <h3>2. Mike Piazza</h3> <img class="ModalPic" src="../Images/Catchers/Piazza.jpg"><br>
						   <h3>3. Ivan Rodriguez</h3> <img class="ModalPic" src="../Images/Catchers/Ivan.jpg"><br>
						   <h3>4. Yogi Berra</h3> <img class="ModalPic" src="../Images/Catchers/Yogi.jpg"><br>
						   <h3>5. Joe Mauer</h3> <img class="ModalPic" src="../Images/Catchers/Mauer.jpg"><br>
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
						   <h3>1. Albert Pujols</h3> <img class="ModalPic" src="../Images/First/Pujols.jpg"><br>
						   <h3>2. David Ortiz</h3> <img class="ModalPic" src="../Images/First/Ortiz.jpg"><br>
						   <h3>3. Lou Gehrig</h3> <img class="ModalPic" src="../Images/First/Lou%20Gehrig.jpg"><br>
						   <h3>4. Jeff Bagwell</h3> <img class="ModalPic" src="../Images/First/Bagwell.jpg"><br>
						   <h3>5. Frank Thomas</h3> <img class="ModalPic" src="../Images/First/Frank.jpg"><br>
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
						   <h3>1. Jackie Robinson</h3> <img class="ModalPic" src="../Images/Second/Jackie.jpg"><br>
						   <h3>2. Joe Morgan</h3> <img class="ModalPic" src="../Images/Second/Morgan.jpg"><br>
						   <h3>3. Chase Utley</h3> <img class="ModalPic" src="../Images/Second/Utley.jpg"><br>
						   <h3>4. Ryne Sandberg</h3> <img class="ModalPic" src="../Images/Second/Sandberg.jpg"><br>
						   <h3>5. Roberto Alomar</h3> <img class="ModalPic" src="../Images/Second/Alomar.jpg"><br>
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
						   <h3>1. Mike Schmidt</h3> <img class="ModalPic" src="../Images/Third/Schmidt.jpg"><br>
						   <h3>2. Chipper Jones</h3> <img class="ModalPic" src="../Images/Third/Chipper.jpg"><br>
						   <h3>3. Eddie Matthews</h3> <img class="ModalPic" src="../Images/Third/Eddie.jpg"><br>
						   <h3>4. Wade Boggs</h3> <img class="ModalPic" src="../Images/Third/Boggs.jpg"><br>
						   <h3>5. Scott Rolen</h3> <img class="ModalPic" src="../Images/Third/Rolen.jpg"><br>
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
						   <h3>1. Derek Jeter</h3> <img class="ModalPic" src="../Images/Short/jeter.jpg"><br>
						   <h3>2. Alex Rodriguez</h3> <img class="ModalPic" src="../Images/Short/arod.jpg"><br>
						   <h3>3. Cal Ripken Jr.</h3> <img class="ModalPic" src="../Images/Short/Ripkin%20Jr..jpg"><br>
						   <h3>4. Ernie Banks</h3> <img class="ModalPic" src="../Images/Short/Ernie.jpg"><br>
						   <h3>. Ozzie Smith</h3> <img class="ModalPic" src="../Images/Short/Ozzie.jpg"><br>
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
						   <h3>1. Stan Musial</h3> <img class="ModalPic" src="../Images/Left/Stan.jpg"><br>
						   <h3>2. Rickey Henderosn</h3> <img class="ModalPic" src="../Images/Left/Henderson.jpg"><br>
						   <h3>3. Ted Williams</h3> <img class="ModalPic" src="../Images/Left/Ted.jpg"><br>
						   <h3>4. Lou Brock</h3> <img class="ModalPic" src="../Images/Left/Lou.jpg"><br>
						   <h3>5. Josh Hamilton</h3> <img class="ModalPic" src="../Images/Left/Josh.jpg"><br>
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
						   <h3>1. Ken Griffey Jr.</h3> <img class="ModalPic" src="../Images/Center/Jr..jpg"><br>
						   <h3>2. Willie Mays</h3> <img class="ModalPic" src="../Images/Center/Mays.jpg"><br>
						   <h3>3. Mickey Mantle</h3> <img class="ModalPic" src="../Images/Center/Mantle.jpg"><br>
						   <h3>4. Carlos Beltran</h3> <img class="ModalPic" src="../Images/Center/Beltran.jpg"><br>
						   <h3>5. Joe Dimaggio</h3> <img class="ModalPic" src="../Images/Center/Dimaggio.jpg"><br>
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
						   <h3>1. Babe Ruth</h3> <img class="ModalPic" src="../Images/Right/Ruth.jpg"><br>
						   <h3>2. Henry Aaron</h3> <img class="ModalPic" src="../Images/Right/Hank.jpg"><br>
						   <h3>3. Roberto Clemente</h3> <img class="ModalPic" src="../Images/Right/Roberto.jpg"><br>
						   <h3>4. Reggie Jackson</h3> <img class="ModalPic" src="../Images/Right/October.jpg"><br>
						   <h3>5. Ichiro Suzuki</h3> <img class="ModalPic" src="../Images/Right/Ichiro.jpg"><br>
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
						   <h3>1. Sandy Koufax</h3> <img class="ModalPic" src="../Images/Starting/Sandy.jpg"><br>
						   <h3>2. Randy Johnson</h3> <img class="ModalPic" src="../Images/Starting/BigUnit.jpg"><br>
						   <h3>3. Nolan Ryan</h3> <img class="ModalPic" src="../Images/Starting/Nolan.jpg"><br>
						   <h3>4. Bob Gibson</h3> <img class="ModalPic" src="../Images/Starting/Gibson.jpg"><br>
						   <h3>5. John Smoltz</h3> <img class="ModalPic" src="../Images/Starting/smoltz.jpg"><br>
						   <h3>6. Pedro Martinez</h3> <img class="ModalPic" src="../Images/Starting/pedro.jpg"><br>
						   <h3>7. Roy Halladay</h3> <img class="ModalPic" src="../Images/Starting/Roy.jpg"><br>
						   <h3>8. Curt Schilling</h3> <img class="ModalPic" src="../Images/Starting/Curt.jpg"><br>
						   <h3>9. Roger Clemens</h3> <img class="ModalPic" src="../Images/Starting/Clemens.jpg"><br>
						   <h3>10. Greg Maddux</h3> <img class="ModalPic" src="../Images/Starting/Greg.jpg"><br>
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
						   <h3>1. Mariano Rivera</h3> <img class="ModalPic" src="../Images/Relief/Rivera.jpg"><br>
						   <h3>2. Dennis Eckersly</h3> <img class="ModalPic" src="../Images/Relief/Dennis.jpg"><br>
						   <h3>3. Billy Wagner</h3> <img class="ModalPic" src="../Images/Relief/Wagner.jpg"><br>
						   <h3>4. Johnathon Papelbon</h3> <img class="ModalPic" src="../Images/Relief/Jpap.jpg"><br>
						   <h3>5. Eric Gagne</h3> <img class="ModalPic" src="../Images/Relief/Eric.jpg"><br>
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
						   <h3>1. Tony Larussa</h3> <img class="ModalPic" src="../Images/Manager/Larussa.jpg"><br>
						   <h3>2. Terry Francona</h3> <img class="ModalPic" src="../Images/Manager/Francona.jpg"><br>
						   <h3>3. Joe Torre</h3> <img class="ModalPic" src="../Images/Manager/Torre.jpg"><br>
						   <h3>4. Bobby Cox</h3> <img class="ModalPic" src="../Images/Manager/Cox.jpg"><br>
						   <h3>5. Tommy Lasorda</h3> <img class="ModalPic" src="../Images/Manager/Lasorda.jpg"><br>
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
    <input type="button" class="buttons" value="My Current Favorite Players" onclick="Current()">
			</div>
    </div><!-- close of bootstrap container-->
	</div>
</body>
</html>