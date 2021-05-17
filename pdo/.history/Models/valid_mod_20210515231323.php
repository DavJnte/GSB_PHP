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
            include("/Vues/modifier_medicament.php");
            ?> 
                    <!--Formulaire ajout d'un autre medicament ou retour au menu principal-->
            <br>
                        <form action="#?target=changement" method="POST" class="form">
                                <input type="submit" name="submit" value="Modifier un autre Médicament">
                        </form>
                        
                        <form action="#?target=menu" method="POST" class="form">
                                <input type="submit" name="submit" value="Retour au menu principal">
                        </form>
	</body>
</html>