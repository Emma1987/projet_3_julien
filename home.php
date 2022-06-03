<?php include('connexion_bdd.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
		<title>Projet 3 openclassroom</title>
	</head>
	
	<body>
		
			<?php include('header.php'); ?>

			<section>
					
						<p>
				Le GBAF est le représentant de la profession bancaire et des assureurs sur tous les axes de la réglementation financière française. Sa mission est de promouvoir l'activité bancaire à l’échelle nationale. C’est aussi un interlocuteur privilégié des pouvoirs publics.
				Aujourd’hui, il n’existe pas de base de données pour chercher ces informations de manière fiable et rapide ou pour donner son avis sur les partenaires et acteurs du secteur bancaire, tels que les associations ou les financeurs solidaires.
				Pour remédier à cela, le GBAF souhaite proposer aux salariés des grands groupes français un point d’entrée unique, répertoriant un grand nombre d’informations sur les partenaires et acteurs du groupe ainsi que sur les produits et services bancaires et financiers.
				Chaque salarié pourra ainsi poster un commentaire et donner son avis.
						</p>
					</div>
			</section>
			
			  
			<section>
					
						<h2>LES PARTENAIRES</h2>
					
					<?php 
						$requete = $db->prepare('SELECT * FROM acteur');
						$requete->execute();
						$listeActeurs = $requete->fetchAll();

						foreach ($listeActeurs as $acteur) {
							?>
							<p><div class="nom_acteur"><?php echo $acteur['description']; ?></div></p>
							<p><div class="description_acteur"><?php echo $acteur['description']; ?></div><a href="acteur.php?<?php echo $acteur['id_acteur']; ?>">Lire la suite</a></p> 
							<img class="logo_acteur" alt="logo des acteurs" src="img/<?php echo $acteur['logo']; ?>">

							<?php
						}
					?>
					</div>
				</section>

				<?php include('footer.php'); ?>
			
		



		



		</div>
	</body>
</html>