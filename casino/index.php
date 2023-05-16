<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon"  href="photos/favicon3.png">
	<link rel="stylesheet" href="styles.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Gambling Room</title>
</head>
<body>
	<div id="title">Let's Begin<img src="photos/naslov2.png" alt="Dice" width="200" height="200"></div>
	<div id="menu">
		<form action="dice.php" method="post">
			<div id="playerOne" class="player">
				<div class="playerTitle">Player<br /> 1<br /><br /><i  id="userOne"></i></div>				
				<input id="player0" maxlength="9" autocomplete="off" onkeydown="limit(this)" onkeyup="limit(this)" type="text" class="playerInput" name="userOne" required></input>
			</div>
			<div id="playerTwo" class="player">
				<div class="playerTitle">Player<br /> 2<br /><br /><i  id="userOne"></i></div>
				<input id="player1" maxlength="9" autocomplete="off" onkeydown="limit(this)" onkeyup="limit(this)" type="text" class="playerInput" name="userTwo" required></input>
			</div>
			<div id="playerThree" class="player">
				<div class="playerTitle">Player<br /> 3<br /><br /><i id="userOne"></i></div>
				<input id="player2" maxlength="9" autocomplete="off" onkeydown="limit(this)" onkeyup="limit(this)" type="text" class="playerInput" name="userThree" required></input>
			</div>
			<div id="roundsWrapper">
				<div id="roundsTitle">ROUNDS</div>
				<select name="rolls" id="rounds">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>
			<input type="submit" id="submit" value="START"></input>
		</form>
	</div>
</body>

</html>