<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/style.css" />
	</head>
	
	<body>


		<header>
			<u>Inscription</u>
			<a href="?target=login">Déjà inscrit?</a>
			<h1>Bienvenue sur le support Médicaments GSB</h1>
			<img src="../pdo/img/gsb (1).jpg" height="100px"/>  <!--Image GSB-->
		</header>



		<h3>Veuillez renseigner les champs ci-dessous:</h3>

		<!--Formulaire inscription -->
		<form name="fo" method="post" action="" enctype="multipart/form-data">
			<label>Nom :</label>
			<input type="text" name="nom" value="<?php echo $nom?>" />
			<br>
			<label>Prénom :</label>
			<input type="text" name="prenom" value="<?php echo $prenom?>" />
			<br>
			<label>Login :</label>
			<input type="text" name="login" value="<?php echo $login?>" />
			<br>
			<label>Mot de passe :</label>
			<input type="password" name="pass" />
			<br>
			<label>Confirmation du Mot de passe :</label>
			<input type="password" name="repass" />			
			<p>
			<input type="submit" name="valider" value="S'inscrire" />
			</p>
		</form>


	</body>
</html>