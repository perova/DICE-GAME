<?php
session_start();
if(!isset($_SESSION["username"])){
	header('Location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="style2.css">

	<title> Dice game Chart</title>
	<style type="text/css">
		#myChart {
			color: black;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<canvas id="myChart" width="400" height="400"></canvas>
			</div>
			<div class="col-md-4">
			
			
				<h1 class="upper"><?php echo $_SESSION['username']. " " ?>results chart!</h1>
				
		</div>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
	<script src="jquery.js"></script>
	<script src="stat.js"></script>
</body>
</html>
