<?php
	require('../../models/winbook.php');
	$bdd=connect();
	//prise des moyennes
	$notes=array('maths'=> $_POST['maths'],'phys'=>$_POST['phys'],'svt'=>$_POST['svt'],'fr'=>$_POST['fr'],'hg'=>$_POST['hg'],'eps'=>$_POST['eps']);
	//prise des appréciations
	$ap=array('ap'=>$_POST['ap'],'ap1'=>$_POST['ap1'],'ap2'=>$_POST['ap2'],'ap3'=>$_POST['ap3'],'ap4'=>$_POST['ap4'],'ap5'=>$_POST['ap5']);
	//insertion des moyennes
	   //mathematiques
	$req=$bdd->prepare('UPDATE notes SET mathematiques=? WHERE matriculescolaire=?');
	$req->execute(array($notes['maths'],$_GET['matricule']));
	$req->closeCursor();
	   //physique
	$req=$bdd->prepare('UPDATE notes SET physique=? WHERE matriculescolaire=?');
	$req->execute(array($notes['phys'],$_GET['matricule']));
	$req->closeCursor();
	   //svt
	$req=$bdd->prepare('UPDATE notes SET svt=? WHERE matriculescolaire=?');
	$req->execute(array($notes['svt'],$_GET['matricule']));
	$req->closeCursor();
	   //français
	$req=$bdd->prepare('UPDATE notes SET francais=? WHERE matriculescolaire=?');
	$req->execute(array($notes['fr'],$_GET['matricule']));
	$req->closeCursor();
	   //hg
	$req=$bdd->prepare('UPDATE notes SET hg=? WHERE matriculescolaire=?');
	$req->execute(array($notes['hg'],$_GET['matricule']));
	$req->closeCursor();
	   //eps
	$req=$bdd->prepare('UPDATE notes SET eps=? WHERE matriculescolaire=?');
	$req->execute(array($notes['eps'],$_GET['matricule']));
	$req->closeCursor();
	//insertion des appréciations
	   //mathematiques
	$req=$bdd->prepare('UPDATE appreciation SET amathematiques=? WHERE matriculescolaire=?');
	$req->execute(array($ap['ap'],$_GET['matricule']));
	$req->closeCursor();
	   //physique
	$req=$bdd->prepare('UPDATE appreciation SET aphysique=? WHERE matriculescolaire=?');
	$req->execute(array($ap['ap1'],$_GET['matricule']));
	$req->closeCursor();
	   //svt
	$req=$bdd->prepare('UPDATE appreciation SET asvt=? WHERE matriculescolaire=?');
	$req->execute(array($ap['ap2'],$_GET['matricule']));
	$req->closeCursor();
	   //français
	$req=$bdd->prepare('UPDATE appreciation SET afrancais=? WHERE matriculescolaire=?');
	$req->execute(array($ap['ap3'],$_GET['matricule']));
	$req->closeCursor();
	   //hg
	$req=$bdd->prepare('UPDATE appreciation SET ahg=? WHERE matriculescolaire=?');
	$req->execute(array($ap['ap4'],$_GET['matricule']));
	$req->closeCursor();
	   //eps
	$req=$bdd->prepare('UPDATE appreciation SET aeps=? WHERE matriculescolaire=?');
	$req->execute(array($ap['ap5'],$_GET['matricule']));
	$req->closeCursor();
	header('location:../../views/ecole/listeeleves.php');
?>