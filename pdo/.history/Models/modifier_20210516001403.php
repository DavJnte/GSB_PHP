<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/App.css" />
	</head>
	<body>
		<header>
			Modification/Suppression Médicaments
            <?php
            include(__DIR__ ."/../Models/header.php");
            ?>
		
            <!--Necessité du tableau pour afficher les données-->
            <?php 
                include(__DIR__ ."/../Vues/tableau.php");
            ?>

            <!--Choisir entre quel menu on souhaie partir-->
            <br/>
            <form>
                 <a href="?target=changement" class="m-link">Modifier</a>
               
                 <a href="?target=supp" class="m-link"> Supprimer</a>
            </form>
                
                <section>
                    <br>
                    <u><h2>Médicaments en stock</h2></u>
                        <!--Affichage du Tableau des Médicaments-->
                    <table>
                        <tr>
                            <th>Famille :</th>
                            <th>Liste des produit en stock :</th>
                            <th>Quantité :</th>

                        </tr>  
   
                        <?php
                            while ($donnees=$reponse->fetch())    
                             {         
                        ?>

                        <form id="mod"action="#?target=changement" method="POST" class="form">
                        
                        <tr>
                                <th><?php echo $donnees['libFamille'];?></th>
                                <th><?php echo $donnees['Nom_produit'];?></th>
                                <th><?php echo $donnees['Qte_stock'];?></th>
                               
         
                        </tr>
     
                        </form>
                        
                        <?php
                            }    
                        ?>
                    </table>
                    
                    <br>

                </section> 
            <br>
               
	</body>
</html>