<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1" charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/infoseleve.css">
	<title>Ecole|Infos de l'élève</title>
</head>
<body>
	<figure><img src="../logo.JPG" alt='winbook'></figure>
	<div class='container-fluid'>
		<h1 class="text-center">Informations sur l'élève</h1>
		<form  action="../../controllers/ecole/c_infoseleve.php" method="post" enctype="multipart/form-data"  name='form' class="col-xs-offset-2 col-xs-8">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2">
						<label for='nom'>Nom<span>*</span> </label> 
					</div>
					<div class="col-xs-7">
						<input  type="text" name="nom" id="nom" class='form-control' required>
					</div>
					<div class="col-xs-3" id='errornom'>
						
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2">
						<label for='prenom'>Prénom<span>*</span> </label> 
					</div>
					<div class="col-xs-7">
						<input class='form-control' type="text" name="prenom" id="prenom" required>
					</div>
					<div class="col-xs-3" id='errorprenom'>
						
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2">
						<label for='ms'>Matricule scolaire<span>*</span> </label>
					</div>
					<div class="col-xs-7">
						<input type="text" name="ms" id="ms" class="form-control" required>
					</div>
					<div class="col-xs-3" id='errorms'>
						
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2">
						<label for='mw'>Matricule win<span>**</span></label>
					</div>
					<div class="col-xs-7">
						<input type="text" name="mw" id="mw" class="form-control" required>
					</div>
					<div class="col-xs-3" id='errormw'>
						
					</div>
				</div>
			</div>
			<!-- <div class="form-group">
				<div class="row">
					Photo:<input type="file" name='photo' accept="image/png" required>
				</div>
			</div> -->
			<div class="form-group text-center">
				<input type="submit" value="ENREGISTRER"  class="btn btn-primary" >
			</div>
			<p class='text-center' id="error"></p>
			<div class="form-group help-block">
				*:Obligatoire<br>
				**:Matricule à remettre aux parents pour accéder aux résultats de leur enfant
			</div>
		</form>
	</div>
	<footer class="text-center">Ceci est une réalisation de l'étudiant Gougou Nelson du groupe Winner de l'école NaN </footer>
	<script src="js/infoseleve.js"></script>
</body>
</html>