<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/App.css" />
	</head>
	<body>
		<header>
            Suppression Médicaments	
            <?php
            include(__DIR__ ."/../Models/header.php");
        ?>


        <?php
            include(__DIR__ ."/../Vues/Select_supprimer_medicament.php");
        ?>
                <br>
                <u><h1>Sélectionner un Médicament :</h1> </u>
                    <!--Le formulaire nous conduit pour retourner à la sélection-->
                <form action="?target=modifier" method="POST" class="form1"> 
                    <input type="submit" name="submit" value="Retour à la Sélection">
                </form>

                <section>
                     <?php foreach($sup as $sups): ?> <!--Parcours toutes les lignes dans la table-->
                    
                            <table>

                                <br>
                                <th>Médicament :</th>
                                <td><?=$sups['Nom_produit']?><td> <!--Affiche nom Médicament-->

                            <tr></tr>

                                <th>Quantité :</th>
                                <td><?=$sups['Qte_stock']?></td><!--Affiche la quantité-->
                                <tr></tr>
                                
                                <th>Famille :</th>
                                <td><?=$sups['libFamille']?></td>

                                <a href="?target=supprimer&produit=<?= $sups['idMedicament'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce médicament ?');">Supprimer</a> <!--Bouton supprimer un médicament-->
                                <p></p>
                                <th></th>
                             </table>

                    <?php endforeach; ?>

                    <br>

                </section>

	</body>
</html>