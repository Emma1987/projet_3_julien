<?php include('connexion_bdd.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login</title>
</head>

<body>
	<form method="post" action="home.php">
		<label for="identifiant">Mon identifiant</label>
		<input type="text" name="identifiant" label="identifiant" id="identifiant">
		<label for="password">Mot de passe</label>
		<input type="password" name="mot de passe" label="mot de passe" id="password">
		<input type="submit" name="envoyer" label="Envoyer">
	</form>

</body>
</html>