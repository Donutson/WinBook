<?php
	require('../../models/winbook.php');
	$bdd=connect();
	//prise des notes
	$req=$bdd->prepare('SELECT mathematiques,physique,svt,francais,hg,eps FROM notes WHERE matriculewin=?');
	$req->execute(array($_GET['matricule']));
	$notes=$req->fetch();
	$req->closeCursor();
	//prise des appréciations
	$req=$bdd->prepare('SELECT amathematiques,aphysique,asvt,afrancais,ahg,aeps FROM appreciation WHERE matriculewin=?');
	$req->execute(array($_GET['matricule']));
	$ap=$req->fetch();
	$req->closeCursor();
	//calcul de la moyenne
	$mean=($notes['mathematiques']+$notes['physique']+$notes['svt']+$notes['francais']+$notes['hg']+$notes['eps'])/6;
	echo $mean;
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1" charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/infosenfant.css">
	<title>Parent|infos de l'enfant</title>
</head>
<body>
	<figure><img src="../logo.JPG" alt='winbook'></figure>
	<div class='container-fluid'>
		<section class="responsive-table col-xs-offset-2 col-xs-6">
			<table class="table table-bordered table-hover">
				<thead >
					<tr>
						<th>
							Matière
						</th>
						<th>
							Moyenne
						</th>
						<th class="text-center">
							Appréciation ou remarques
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="titre">
							Mathématiques
						</td>
						<td>
							<?php echo $notes['mathematiques']; ?>
						</td>
						<td>
							<?php echo $ap['amathematiques']; ?>
						</td>
					</tr>
					<tr>
						<td class="titre">
							Physique
						</td>
						<td>
							<?php echo $notes['physique']; ?>
						</td>
						<td>
							<?php echo $ap['aphysique']; ?>
						</td>
					</tr>
					<tr>
						<td class="titre">
							SVT
						</td>
						<td>
							<?php echo $notes['svt']; ?>
						</td>
						<td>
							<?php echo $ap['asvt']; ?>
						</td>
					</tr>
					<tr>
						<td class="titre">
							Français
						</td>
						<td>
							<?php echo $notes['francais']; ?>
						</td>
						<td>
							<?php echo $ap['afrancais']; ?>
						</td>
					</tr>
					<tr>
						<td class="titre">
							HG
						</td>
						<td>
							<?php echo $notes['hg']; ?>
						</td>
						<td>
							<?php echo $ap['ahg']; ?>
						</td>
					</tr>
					<tr>
						<td class="titre">
							EPS
						</td>
						<td>
							<?php echo $notes['eps']; ?>
						</td>
						<td>
							<?php echo $ap['aeps']; ?>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<span>Moyenne générale: <?php echo $mean; ?></span>
						</td>
					</tr>
				</tbody>
			</table>
			<a class='btn btn-primary' href="connexionparent.php">QUITTER</a>
		</section>

	</div>
	<footer class="text-center">Ceci est une réalisation de l'étudiant Gougou Nelson du groupe Winner de l'école NaN </footer>
</body>
</html>