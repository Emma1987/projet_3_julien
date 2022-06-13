<?php include('connexion_bdd.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Inscritpion</title>
</head>
<body>
	<?php include('header.php'); ?>
	<h1>Inscription</h1>
	<form method=post action="traitement_form.php">
		<fieldset>
			<legend>Identité</legend>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom" value="Julien">
				<label for="prenom">Prénom</label>
				<input type="text" name="prenom" id="prenom" value="Dupont">
		</fieldset>
			<legend>Id de connexion</legend>
				<label for="username">Pseudo</label>
				<input type="text" name="username" id="username">
				<label for="password">Mot de passe</label>
				<input type="password" name="Mot de passe" id="password">
		</fieldset>
		
			<legend>Oublie id connexion</legend>
			<label for="question">Question secrète</label>
			<select name="question" id="question">
				<option value="Quel est le nom de votre premier animal de compagnie?">Quel est le nom de votre premier animal de compagnie?</option>
				<option value="Quel est le prénom de votre mère?">Quel est le prénom de votre mère?</option>
				<option value="Quel est votre sport favori?">Quel est votre sport favori?</option>				
			</select> 
		
	</form>
	<?php include('footer.php'); ?>
</body>
</html>