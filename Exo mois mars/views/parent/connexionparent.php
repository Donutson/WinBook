<?php
function isok($mw){
	require_once('../../models/winbook.php');
	$ok=false;
	$bdd=connect();
	$req=$bdd->prepare('SELECT * FROM liste WHERE matriculewin=?');
	$req->execute(array($mw));
	if($req->fetch()!=array()){$ok=true;}
	$req->closeCursor();
	return $ok;
}
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		require('../../models/winbook.php');
		$bdd=connect();
		$error='';
		$issuccess=true;
		if($_POST['mw']==''){
			$issuccess=false;
			$error="Veuillez remplir ce champ";
		}
		else if(!preg_match("#^CI2019[0-9]+[a-zA-Z]+#", $_POST['mw'])){
			$issuccess=false;
			$error="Format invalide";
		}
		else if(!isok($_POST['mw'])){
			$issuccess=false;
			$error="Ce matricule n'existe pas";
		}else if($issuccess){
			header('location:infosenfant.php?matricule='.$_POST['mw']);
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1" charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/connexionparent.css">
	<title>Parent|connexion</title>
</head>
<body>
	<figure><img src="../logo.JPG" alt='winbook'></figure>
	<div class='container-fluid'>
		<h1 class="text-center">Veuillez saisir le matricule win de votre enfant</h1>
		<form class="col-xs-offset-3 col-xs-6" method="post">
			<div class="form-group">
				<input class='form-control' type="text" name="mw" >
			</div>
			<p style="color: red;font-size: 22px;"><?php if(isset($error)) echo $error; ?> </p>
			<div class="form-group text-center">
				<input class="btn btn-primary" type="submit" value="VALIDER">
			</div>
		</form>
	</div>
	<footer class="text-center">Ceci est une réalisation de l'étudiant Gougou Nelson du groupe Winner de l'école NaN </footer>
</body>
</html>