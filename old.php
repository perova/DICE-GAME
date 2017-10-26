<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>JS Order</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>JS Order</h1>
				<hr>
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input" id="cb_veg">Rodyti tik vegetariskus patiekalus
					</label>
					<hr>
				</div>
				<div class="row"><h2>Pirmi patiekalai</h2></div>
				<div class="row">
					<div class="col">
						<div class="row">
							<div class="form-check">
								<label class="form-check-label">
									<input checked type="checkbox" class="form-check-input" id="sriubos">
									Sriubos
								</label>
							</div>
						</div>
						<div class="row" id="div_sriubos">
							<select class="form-control" id="sriubu_sarasas" >
								<option veg="false">Zuviene</option>
								<option veg="true" >Darzoviu</option>
								<option veg="false">Barsciai</option>
								<option veg="true">Saltibarsciai</option>
							</select>
						</div>
					</div>
					<div class="col">
						<div class="row">
							<div class="form-check">
								<label class="form-check-label">
									<input checked type="checkbox" class="form-check-input" id="salotos">
									Salotos
								</label>
							</div>
						</div>
						<div class="row" id="div_salotos">
							<select class="form-control" id="salotu_sarasas" >
								<option veg="false">Cezario</option>
								<option veg="true" >Balta misraine</option>
								<option veg="false">Silke kefyre</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row"><h2>Antri patiekalai</h2></div>
				<div class="row">
					<div class="col">
						<div class="row">
						<select class="form-control" id="ap_sarasas" >
							<option gluten="false" veg="false">Kotletas</option>
							<option glute="false" veg="false" nuts="true">Ceburekas</option>
							<option gluten="true" veg="false">Cheese burger</option>
							<option gluten="true" veg="false">Chicken burger</option>
							<option gluten="true" veg="false">Jautienos troskinys</option>
							<option gluten="false" veg="true">Darzoviu risotto</option>
							<option gluten="false" veg="true" nuts="true">Riesutu troskinys</option>
						</select>
						</div>
					</div>
					<div class="col">
						<div class="row">
							<div class="form-check">
							  <label class="form-check-label">
							    <input class="form-check-input" type="checkbox" id="cb_gluten">
							    Rodyti patiekalus su gliutenu
							  </label>
							</div>
							<div class="form-check">
							  <label class="form-check-label">
							    <input class="form-check-input" type="checkbox" id="cb_nuts">
							    Rodyti patiekalus su riesutais 
							  </label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="script.js"></script>
</body>
</html>