<?php
function connect(){
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=winbook', 'projetNaNmars', 'nan');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	return $bdd;
}

?>