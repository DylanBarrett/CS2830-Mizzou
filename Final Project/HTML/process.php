<?php
	$name = empty($_POST['name']) ? 'Unknown' : $_POST['name'];
	$player = empty($_POST['player']) ? 'no favorite player' : $_POST['player'];
	$position = empty($_POST['position']) ? 'indeterminant' : $_POST['position'];
	
	print "<b>$name favorite player is $player and thier favorite position is $position.</b><br><br>\n";
?>