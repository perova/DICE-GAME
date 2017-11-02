<?php
session_start();
if(!isset($_SESSION["username"])){
	header('Location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<!-- <script src="app.js"></script> -->
	<title>Dice Game</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2 class="left upper">Welcome<?php
				echo " " . $_SESSION["username"] . "!";
				?></h2>
				<a class="btn btn-warning right" href="logout.php">LOG OUT</a><br><br>
				<a class="btn btn-warning right" href="stats.php">MY CHART</a>
				<h1>Dice Game</h1>

			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">

				<button class="btn btn-success margintop" onclick="new_game()">Start a new game</button>

				<!-- <input type="btn" class="btn btn-primary" name="start" id="start" onclick="start()" value="START GAME"> -->
			</div>
			<div class="col-md-6">
				<button type="button" id="roll" class="btn btn-warning dice-roll" disabled>roll dice</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="column">
						<div id="dice-side-1" class="dice">0</div>
						<div id="dice-side-2" class="dice">0</div>
						<div id="dice-side-3" class="dice">0</div>
					</div>

					<div class="column">
						
						
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div><h1 id="game_over"></h1></div>
				<div><h1 id="win"></h1></div>
			</div>
		</div>

		
	</div>
	<!-- <script >
		  gameOver = true;
		function new_game() {
     if (gameOver) {
         gameOver = false;
         // start a game 
         console.log("Starting a new game..");

//         // clear lucky_numbers array
         diceTotal = [];

//         // generate ticket of 4 numbers
         status = [];

        }
        
 else {
        alert('Game is not yet over!');    } 

}
</script> -->
<script src="jquery.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
