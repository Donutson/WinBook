<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1" charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/connexionecole.css">
	<title>Ecole|connexion</title>
</head>
<body>
	<figure><img src="../logo.JPG" alt='winbook'></figure>
	<div class='container-fluid'>
		<h1 class="text-center">CONNEXION</h1>
		<form method="post" action="../../controllers/ecole/c_connexionecole.php" class="col-xs-offset-3 col-xs-6">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-3">
						<label for='user'>User </label> 
					</div>
					<div class="col-xs-7">
						<input class='form-control' type="text" name="user" id="user">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-3">
						<label for='pass'>Password </label> 
					</div>
					<div class="col-xs-7">
						<input class='form-control' type="password" name="pass" id="pass">
					</div>
				</div>
			</div>
			<div class="form-group text-center">
				<input class="btn btn-primary" type="submit" value="CONNECT">
			</div>
			<p id='error'><?php if(isset($error)) echo $error; ?></p>
		</form>
	</div>
	<footer class="text-center">Ceci est une réalisation de l'étudiant Gougou Nelson du groupe Winner de l'école NaN </footer>
</body>
</html>