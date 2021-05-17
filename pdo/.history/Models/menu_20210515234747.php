<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/App.css" />
	</head>
	<body>
        <header>

        
		Menu Principal
        <?php
            require_once("Models/header.php");
        ?>
        <!--Menu des Options-->
        <label>
            <br>
                <a href="?target=contexte" class="m-link">Contexte GSB</a>
                <a href="?target=probleme" class="m-link">Doc Technique</a>
                <a href="?target=contacter" class="m-link">Nous Contacter</a>    
        </label>

            <!--Barre de recherche-->
       <h2>Vous Recherchez un produit ?</h2> 
            <form action="?target=recherche" method="POST" class="form">
                 <input type="text" name="search" placeholder="Mot(s) clé(s)"/>
                 <input type="submit" name="submit" value="Rechercher">
            </form>

                    <section>
                                <!--Nécessité de ce connecter à la BDD-->
                        <?php 
                            include("../Vues/tableau.php"); 
                        ?>
                        
                        <br>

                        <u><h2>Médicaments en stock</h2></u>

                                <!--Affichage du Tableau-->
                            <table>
                                <tr>
                                    <th>Famille :</th>
                                    <th>Liste des Médicaments :</th>
                                    <th>Quantité:</th>
                                    
                                </tr>  
                                        
                                    <?php
                                       
                                        while ($donnees=$reponse->fetch())    
                                        {         
                                    ?>
                                                <tr>
                                                         <th><?php echo $donnees['libFamille'];?></th>
                                                         <th><?php echo $donnees['Nom_produit'];?></th>
                                                         <th><?php echo $donnees['Qte_stock'];?></th>
                                                         
                                                </tr>
                                    <?php
                                        }    
                                    ?>

                             </table>

                        <br>
                     
                    
                    </section>

	</body>
</html>



