<?php
$error='';
$issuccess=true;
if($_POST['user']!='Nelson' || $_POST['pass'] !='admin'){
	$error='Accès Réfusé!';
	$issuccess=false;
}
if($issuccess) header('location:../../views/ecole/listeeleves.php');
include('../../views/ecole/connexionecole.php')
?>