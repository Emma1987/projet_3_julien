<?php session_start(); ?>
<?php include('connexion_bdd.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Inscritpion</title>
</head>

<body>

	<?php include('en_tete.php'); ?>

	<h1>Inscription</h1>

	<form method=post action="inscription.php">
		<fieldset>
			<legend>Identité</legend>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom">
				<label for="prenom">Prénom</label>
				<input type="text" name="prenom" id="prenom">
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
			<label for="reponse">Réponse à la question secrète</label>
			<input type="text" name="reponse" id="reponse">
			<input type="submit" name="inscription" label="inscription">
	</form>

	<?php     //on test les variable nom et prenom et on les insere dans la bdd
			if (isset($_POST['nom']) && isset($_POST['prenom'])){
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$requeteSql = INSERT INTO account ('nom','prenom') VALUES ('$nom','$prenom');
				$requete = $db->prepare($requeteSql);
				echo "nouveau user creer"; } 
		     
		     // on test la variable username 
			//if (isset($_POST['username']) && empty($_POST[username])){
			//	$requeteSql = "SELECT * FROM account WHERE username = :username";
			//	$listeUsername = $db->prepare($requeteSql);
				//on demande la liste des username present dans la base et on la compare au username de $_post
			//if ($_POST['username'] <> $listeUsername) {
			//		$requeteINSERT = "INSERT INTO account VALUES (username)";
			//		
			//	}


			//verifier que le username n'existe pas dans ma bdd
		}
		//if (isset($_POST['password']) && empty($_POST['password'])){
			//hacher le mot de passe avant de lenregistrer
		//}

			 






	 ?>
	<?php include('footer.php'); ?>
</body>
</html>