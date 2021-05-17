<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/App.css" />
	</head>

	<body>
		<header>
			Nous contacter
            <!--Affichage Nom+Prenom utilisateur-->
            <span>
		    <?=$_SESSION["nomPrenom"]?>
		    </span>
            <!--Menu de navigation-->
            <div class="m-right">
                <a href="?target=deconnexion" class="m-link">Deconnexion</a>
                <a href="?target=approv" class="m-link"> Approvisionnement</a>
                <a href="?target=modifier" class="m-link">Modification/Suppession</a>
            </div>

            <img src="../pdo/img/gsb (1).jpg" height="100px"/>  <!--Image GSB-->
		</header>

        <!--Menu d'options-->
        <label>
            <br>
            <a href="?target=contexte" class="m-link">Contexte GSB</a>
            <a href="?target=probleme" class="m-link">Doc Technique</a>
        </label>

        <!--Text-->
        <u><h1>Contact</h1></u>
        <p>En cas de problème lié à l'utilisation de l'application de Medicament GSB</p>

        <p>Veuillez nous écrire par mail sur l'adresse suivante :</p>
        <p> gsb.laboratory@gmail.com</p>
        
        <!--Bouton retour menu principal-->
        <form action="?target=menu" method="POST" class="form">

            <input type="submit" name="submit" value="Retour au menu principal">
        </form>

	</body>
</html>
