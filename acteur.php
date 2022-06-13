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
	
	<h3>Les partenaires</h3>
	<?php 
		
		//verifier $get['id'] existe
		if (isset($_GET['id'])) {
			
			$requeteSQL = "SELECT * FROM acteur WHERE id_acteur = :id";
			$requete = $db->prepare($requeteSQL);
			$acteurselect = $requete->execute(['id' => $_GET['id']]);
			$acteur = $requete->fetch();
		
		if (empty($acteur));
			echo $acteur['description'];}


	?>

	
	<?php include('footer.php'); ?>
	



</body>

</html>


