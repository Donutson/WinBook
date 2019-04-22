<?php
	require('../../models/winbook.php');
	$bdd=connect();
	$infos=array('ms'=>$_POST['ms'],'mw'=>$_POST['mw'],'nom'=>$_POST['nom'],'prenom'=>$_POST['prenom']);
	$req=$bdd->prepare('INSERT INTO liste(matriculescolaire,matriculewin,nom,prenom) VALUES(:ms,:mw,:nom,:prenom) ');
	$req->execute($infos);
	$req->closeCursor();
	$req=$bdd->prepare('INSERT INTO notes(matriculescolaire,matriculewin) VALUES(?,?) ');
	$req->execute(array($_POST['ms'],$_POST['mw']));
	$req->closeCursor();
	$req=$bdd->prepare('INSERT INTO appreciation(matriculescolaire,matriculewin) VALUES(?,?) ');
	$req->execute(array($_POST['ms'],$_POST['mw']));
	$req->closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1" charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<title>Traitement</title>
</head>
<body>
	<h1 class="label label-success"> Enregistrement réussie</h1>
</body>
</html>
<?php
	header('Refresh:2;../../views/ecole/infoseleve.php');
?>