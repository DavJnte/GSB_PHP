<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/App.css" />
	</head>
	<body>
		<header>
			Information
		</header>
			<!--Connexion a la BDD-->
		<?php
			include("Vues/supprimer_medicament.php");

			?>
			
			<!--Formulaire pour effacer autre médicament ou aller au menu principal-->
			<br>
				<form action="#?target=supp" method="POST" class="form">
  						<input type="submit" name="submit" value="Supprimer un autre Médicament">
  				</form>

				<form action="#?target=menu" method="POST" class="form">
  					<input type="submit" name="submit" value="Retour au menu principal">
 				</form>

	</body>
</html>
