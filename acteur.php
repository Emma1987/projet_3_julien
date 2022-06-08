<?php include('connexion_bdd.php'); ?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
		<title>Acteur</title>
</head>

<body>
	<h3>Les partenaires</h3>
	<p>
	<?php
	 if (isset($_GET)){
		 var_dump($_GET); //preparer une requete pour recuperer la ligne correspondant a lid 
	}else{
		echo "probleme de variable";
	}
	  ?>
	</p>
	
	



</body>

</html>


