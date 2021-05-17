<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/style.css" />
	</head>
	<body>
		<header>
			Connexion Réussie

			<a href="#?target=deconnexion">Quitter la session</a>
			
		</header>
		
		<h1>
		<?php 
			echo (date("H")<18)?("Bonjour"):("Bonsoir"); //Affiche Bonjour ou bonsoir selon l'heure si - 18h 
		?>
		<span>
		<?=$_SESSION["nomPrenom"]?> <!--Affiche nom + Prenom-->
		</span>
		</h1>

		
		<a href="#?target=menu">Acceder au Menu</a> <!--Bouton pour acceder au menu de l'application-->
		

	</body>
</html>