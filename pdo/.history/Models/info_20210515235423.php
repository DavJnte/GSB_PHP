<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/App.css" />
	</head>

	<body>
		<header>
			<u>Information</u>
		</header>

        <!--Test de connexion a la BDD-->
            <?php
                include(__DIR__ .'/../Vues/info.php");
            ?>
                <!--Bouton pour ajouter un autre médicament ou alors retour au menu principal-->

                <form action="#?target=approv" method="POST" class="form">
                            <input type="submit" name="submit" value="Ajouter un autre Médicament">
                    </form>

                        <form action="#?target=menu" method="POST" class="form">
                        <input type="submit" name="submit" value="Retour au menu principal">
                    </form>

                <br>


	</body>
</html>