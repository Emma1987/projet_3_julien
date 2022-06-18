<?php 

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
?>

<?php include('connexion_bdd.php'); ?>

<!DOCTYPE html>
<html>

<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
		<title>Acteur</title>
</head>

<body>
	<?php include('header.php'); ?>
	
	<h2>Les partenaires</h2>
	<?php 
		
		
		if (isset($_GET['id'])) {
			
			$requeteSQL = "SELECT * FROM acteur WHERE id_acteur = :id";
			$requete = $db->prepare($requeteSQL);
			$acteurselect = $requete->execute(['id' => $_GET['id']]);
			$acteur = $requete->fetch();
		
		if (empty($acteur)); ?>
			<img class="logo_acteur" src="img/<?php echo $acteur['logo']; ?>"></br>
			
			<div class='nom_acteur2'>
			<?php			
			echo $acteur['acteur'];?></br>
			</div>

			<div class='description'>
			<?php
			echo $acteur['description'];
		}

	?></div>

	<section class="commentaire">
		<h4>Poster un commentaire</h4>
		<form method="post" action="commentaire_post.php">
			<textarea name="commentaire" id="commentaire" rows="5" cols="250"></textarea>
			<input type="submit" name="envoyer">
		</form>
	</section>
	
	<?php include('footer.php'); ?>
	



</body>

</html>


