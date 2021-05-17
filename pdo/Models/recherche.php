<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/App.css" />
	</head>

    <br>
     <!--Formulaire pour faire une nouvelle recherche-->
        <header>
                <h1>Effectuer une nouvelle recherche</h1> 
                <form action="?target=recherche" method="POST" class="form">
                    <input type="text" name="search" placeholder="Mot(s) clé(s)"/>
                    <input type="submit" name="submit" value="Recherher">
                </form>	

		</header>


    <body>
        
        <h2>Résultat de votre Recherche :<h2>
            <!--Connexion a la BDD-->
            <section>
                <?php
                include(__DIR__ ."/../Vues/recherche.php");
                    ?>

                <br>
            </section>
                
                <br>
                <!--Formulaire por retourner au menu principal-->
                    <form action="?target=menu" method="POST" class="form">
                        <input type="submit" name="submit" value="Retour au menu principal">
                    </form>
	</body>
</html>