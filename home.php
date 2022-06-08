<?php include('connexion_bdd.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
		<title>Projet 3 openclassroom</title>
	</head>
	
	<body>
			<header>
			<?php include('header.php'); ?>
			</header>
			<section class="presentation">
						<h3>Présentation de GBAF</h3>
						<p>
				Le GBAF est le représentant de la profession bancaire et des assureurs sur tous les axes de la réglementation financière française. Sa mission est de promouvoir l'activité bancaire à l’échelle nationale. C’est aussi un interlocuteur privilégié des pouvoirs publics.
				Aujourd’hui, il n’existe pas de base de données pour chercher ces informations de manière fiable et rapide ou pour donner son avis sur les partenaires et acteurs du secteur bancaire, tels que les associations ou les financeurs solidaires.
				Pour remédier à cela, le GBAF souhaite proposer aux salariés des grands groupes français un point d’entrée unique, répertoriant un grand nombre d’informations sur les partenaires et acteurs du groupe ainsi que sur les produits et services bancaires et financiers.
				Chaque salarié pourra ainsi poster un commentaire et donner son avis.
						</p>
					
			</section>
			  
			<section class="partenaire">
					
						<h3>Les partenaires</h3>
					<div class='acteur'>
					<?php 
						$requete = $db->prepare('SELECT * FROM acteur');
						$requete->execute();
						$listeActeurs = $requete->fetchAll();

						foreach ($listeActeurs as $acteur) {
							?>
							
							<img class="logo" src="img/<?php echo $acteur['logo']; ?>">
							
							<p><div class="nom_acteur"><?php echo $acteur['acteur']; ?></div></p>
							
							<p><div class='descritpion'><?php echo $acteur['description'] ; ?> <a href="acteur.php?<?php echo $acteur['id_acteur'] ; ?>">Lire la suite</a> </div></p>
							<?php
							
						}
					?>
					</div>
			</section>
			
			<footer>

				<?php include('footer.php'); ?>

			</footer>

		
	</body>
</html>