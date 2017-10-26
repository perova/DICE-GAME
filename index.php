<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<title>Dice Game</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2 class="left"><?php
            if (isset($_COOKIE["sausainis_username"])) {
                echo 'Welcome, ' . $_COOKIE["sausainis_username"] . '!';
            } else{ echo 'You are guest';}

            ?></h2>
				<a class="btn btn-warning right" href="logout.php">LOG OUT</a>
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
				<button class="btn btn-warning margintop" onclick="get_number()">Random number</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div id="number_blocks" class="row"></div>
			</div>
			<div class="col-md-6">
				<div class="col-md margintop text-center" id="lucky_number">X</div>
			<div class="col-md margintop text-center" id="numbers">
				<div class="row">
					<div id="ticket" class="col text-center">No ticket</div>
				</div>
				<div class="row">
					<div id="lucky_numbers" class="col text-center">No game</div>
					
				</div>
				<div class="row">
					
					<div id="lucky" class="col text-center">No luck</div>
				</div>
			</div>
			</div>
		</div>

		<form action="game.php" method="post">
  <input type="text" name="data" value="1" />
  <input type="submit" value="Submit" />
</form>
	</div>
	<script src="loto.js"></script>
</body>
</html>
