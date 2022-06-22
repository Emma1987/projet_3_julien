<?php session_start(); ?>
<?php include('connexion_bdd.php'); ?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
		<title>login</title>
</head>

<body>
	<?php include('en_tete.php'); ?>
	<h1>Se connecter :</h1>
	<form class='login' method="post" action="login.php">
		<label for="identifiant">Mon identifiant</label>
		<input type="text" name="identifiant" label="identifiant" id="identifiant">
		<label for="password">Mot de passe</label>
		<input type="password" name="password" id="password">
		<input type="submit" name="envoyer" label="Envoyer">
	</form>
	<?php 
		if  (!empty($_POST['identifiant']) && !empty($_POST['password'])) {
			//$password = password_hash($_POST['password']);
			$password = $_POST['password'];	

			$requeteSQL = "SELECT * FROM account WHERE username = :username and password = :password";
			$requete = $db->prepare($requeteSQL);
			$requete->execute([
				'username' => $_POST['identifiant'],
				'password' => $password,
			]);
			$resultat = $requete->fetch();
			//header('Location: home.php');
			//exit();}

			//if ($resultat) {
			//	$_SESSION['username'] = $_POST['identifiant'];
			//	echo $_SESSION['username'];
				
			//}

			//if (!$resultat) {
			//	echo "mot de passe ou username invalide";		
		    //} else {
			//	echo "vous êtes connecté!!";
			//}
			
			

			


		}
	?>
					




	<?php include('footer.php'); ?>

</body>
</html>