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
	<title>Home Login</title>
	<link rel="stylesheet" type="text/css" href="/CS2830 Final/CSS/HomeLogin.css">
	<link rel="stylesheet" type="text/css" href="/CS2830 Final/CSS/Header.css">
    
    <script src="/CS2830 Final/JavaScript/TogglePlayers.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
    
    <script>
$(document).ready(function(){
    $("#hide1").click(function(){
        $("#team1").hide();
    });
    $("#show1").click(function(){
        $("#team1").show();
    });
});
</script>
<script>
$(document).ready(function(){
    $("#hide2").click(function(){
        $("#team2").hide();
    });
    $("#show2").click(function(){
        $("#team2").show();
    });
});
</script>
    
	</head>
<body>
	<div class="background">
		<?php 
		require('header');
		?>
        <div id="content">
        <div class="container-fluid">
            <h1>My Favorite Things in Baseball</h1>
            
            <div class="National">
            <img src="../Images/National.png" alt="NL" height="100" width="100">
            
            <div>
                <button class=buttons id="hide1">Hide</button>
                <button class=buttons id="show1">Show</button>
            </div>
                <img id="team1" src="../Images/NLteams.png" style="display:none" alt="NLteams" height="500" width="450">
            </div>
            
            <div id="formbox">
                <p class="instructions">Enter your name, Favorite player and Favorite position in the form below and 
			click the Submit button.</p>
			
		<form action="process.php" method="get">
			<p><label for="name" class="name">Name: </label><br>
				<input type="text" name="name" id="name" value=""><br></p>
				
			<p><label for="player">Favorite Player: </label><br>
				<input type="text" name="player" id="player" value=""><br></p>
				
			<p><label for="position" class="position">Favorite Postion: </label><br>
				<input type="text" name="position" id="position" value=""><br></p>
				
			<p class="center"><input type="button" value="Submit" onclick="doSubmit()"></p>
            <p class="instructions">Also click on the buttons below the image on the bottom of the screen to display the 15 teams for both the National and American Leagues</p>
		</form>
            </div><!--close of form div-->
                
            <div class="American">
            <img src="../Images/American.png" alt="AL" height="100" width="100">
            
            <div>
                <button class=buttons id="hide2">Hide</button>
                <button class=buttons id="show2">Show</button>
            </div>
                <img id="team2" src="../Images/ALteams.png" style="display:none"  alt="ALteams" height="500" width="450">
            </div>
    </div>
    </div>
    </div>
</body>
</html>