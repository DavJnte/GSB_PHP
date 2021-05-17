<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/App.css" />
	</head>
	<body>
		<header>

			Contexte GSB
            <!--Affichage Nom + Prenom utilisateur-->
            <span>
		    <?=$_SESSION["nomPrenom"]?>
		    </span>

            <!--Menu navigation-->
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
             <a href="?target=probleme" class="m-link">Doc Technique</a>
             <a href="?target=contacter" class="m-link">Nous Contacter</a>
        </label>
         
            <h1>Télécharger ci-dessous le fichier du Contexte de l'application</h1>
            <p>
            <a href="doc/contexte.pdf" id="down">Télécharger</a>
            </p>
            

          <br>
            <!--Bouton retour-->
        <form action="" method="POST" class="form">
            <input type="hidden" name="target" value="menu">
            <input type="submit" name="submit" value="Retour au menu principal">
        </form>

	</body>
</html>
