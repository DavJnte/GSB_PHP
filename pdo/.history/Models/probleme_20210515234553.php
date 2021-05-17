<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/App.css" />
	</head>
	<body>
		<header>

			Documentation Technique
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

            <img src="img/gsb (1).jpg" height="100px"/>  <!--Image GSB-->

		</header>

        <!--Menu d'options-->
        <label>
            <br>
             <a href="?target=contexte" class="m-link">Contexte GSB</a>
             <a href="?target=contacter" class="m-link">Nous Contacter</a>
        </label>
        
        <!--Text-->
        <u><h1>Documentation Technique</h1></u>
        <p>Pour apprendre à utiliser l'application GSB</p>

        <p>Veuillez télécharger la documentation en cliquant ci-dessous:</p>

        <!--Bouton Télécharger-->
        <p>
        <a href="doc/doc_technique_gsb.pdf" id="down">Télécharger</a>
        </p>

         <br>
            <!--Bouton retour-->
        <form action="#?target=menu" method="POST" class="form">
            <input type="submit" name="submit" value="Retour au menu principal">
        </form>

	</body>
</html>
