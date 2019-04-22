<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1" charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/attributionmoyennes.css">
	<title>Ecole|Attribution des moyennes</title>
</head>
<body>
	<figure><img src="../logo.JPG" alt='winbook'></figure>
	<div class='container-fluid'>
		<h3> Matricule scolaire de l'élève:<?php echo $_GET['matricule'];?></h3>
		<h1 class="text-center">Attribution des moyennes de <br>
			<?php echo $_GET['nom'].' '.$_GET['prenom'];?>
		 </h1>

		<form method="post" action=<?php echo "../../controllers/ecole/c_attributionmoyennes.php?matricule=".$_GET['matricule'];?>>
			<div class="row">
				<div class="form-group col-lg-2 col-md-3 col-sm-4">
				<label for="maths">Mathématiques:</label> <input type="number" name="maths" id="maths" max='20' min="0"><br> <label for="ap">Appréciation:</label> <br> <textarea id="ap" name="ap"></textarea>
			</div>
			<div class="form-group col-lg-2 col-md-3 col-sm-4">
				<label for="phys">Physique:</label> <input type="number" name="phys" id="phys" max='20' min="0"><br> <label for="ap1">Appréciation:</label> <br> <textarea id="ap1" name="ap1"></textarea>
			</div>
			<div class="form-group col-lg-2 col-md-3 col-sm-4">
				<label for="svt">SVT:</label> <input type="number" name="svt" id="svt" max='20' min="0"><br> <label for="ap2">Appréciation:</label> <br> <textarea id="ap2" name="ap2"></textarea>
			</div>
			<div class="form-group col-lg-2 col-md-3 col-sm-4">
				<label for="fr">Français:</label> <input type="number" name="fr" id="fr" max='20' min="0"><br> <label for="ap3">Appréciation:</label> <br> <textarea id="ap3" name="ap3"></textarea>
			</div>
			<div class="form-group col-lg-2 col-md-3 col-sm-4">
				<label for="hg">HG:</label> <input type="number" name="hg" id="hg" max='20' min="0"><br> <label for="ap4">Appréciation:</label> <br> <textarea id="ap4" name="ap4"></textarea>
			</div>
			<div class="form-group col-lg-2 col-md-3 col-sm-4">
				<label for="eps">EPS:</label> <input type="number" name="eps" id="eps" max='20' min="0"><br> <label for="ap5">Appréciation:</label> <br> <textarea id="ap5" name="ap5"></textarea>
			</div>
			</div>
			<div class="form-group text-center">
				<input type="submit" value="ATTRIBUER" class="btn btn-warning"> <a class="btn btn-danger" href="listeeleves.php">QUITTER </a> 
			</div>
		</form>
	</div>
	<footer class="text-center">Ceci est une réalisation de l'étudiant Gougou Nelson du groupe Winner de l'école NaN </footer>
</body>
</html>