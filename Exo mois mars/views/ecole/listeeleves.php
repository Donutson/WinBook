<?php
	require('../../models/winbook.php');
	$bdd=connect();
	$req=$bdd->query("SELECT matriculescolaire,matriculewin,nom,prenom FROM liste ");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1" charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/listeeleves.css">
	<title>Ecole|Liste des élèves</title>
</head>
<body>
	<figure><img src="../logo.JPG" alt='winbook'></figure>
	<div class='container-fluid'>
		<h1 class="text-center">LISTE DES ELEVES</h1>
		<section class="table-responsive col-xs-8 col-xs-offset-2">
			<table class="table table-bordered table-condensed">
			<thead>
				<tr>
					<th>
						Matricule scolaire
					</th>
					<th>
						Nom
					</th>
					<th>
						Prénom
					</th>
					<th>
							
					</th>
				</tr>
			</thead>
			<tbody>

					<?php
						if($req){
						while ($rep=$req->fetch()) {
					?>
				<tr>
					<td>
						<?php
							echo $rep['matriculescolaire'];
					?>
					</td>
					<td>
						<?php
							echo $rep['nom'];
					?>
					</td>
					<td>
						<?php
							echo $rep['prenom'];
					?>
					</td>
					<td>
						<a href= <?php echo "attributionmoyennes.php?matricule=".$rep['matriculescolaire']."&nom=".$rep['nom']."&prenom=".$rep['prenom']; ?>><button class='btn btn-success'>ENTRER SES MOYENNE</button></a>
						
					</td>
				</tr>
				<?php
				}
				$req->closeCursor();
			}else{
				?>
				<tr>
					<td colspan="4" class="text-center">AUCUNE DONNEE POUR LE MOMENT</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
		<a href="connexionecole.php"><button class="btn btn-primary" >QUITTER</button></a>
		</section>
		
	</div>
	<footer class="text-center">Ceci est une réalisation de l'étudiant Gougou Nelson du groupe Winner de l'école NaN </footer>
</body>
</html>