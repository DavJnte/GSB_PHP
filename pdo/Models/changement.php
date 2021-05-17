
<!--Test si connecté-->

<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/App.css" />
	</head>
   <header>
      Modification Médicaments
      <?php
            include(__DIR__ ."/../Models/header.php");
        ?>
   <br>
	<body>

         <?php
         include(__DIR__ ."/../Vues/getallmedicaments.php");
         ?>


            <u><h1>Sélectionner un Médicament :</h1> </u>

                     <!--Bouton pour retourner a la selection entre modifier et supprimer-->
                     <form action="?target=modifier" method="POST" class="form">
                        <input type="submit" name="submit" value="Retour à la Sélection">
                     </form>

                     <!--Parcours toutes les lignes de la table-->
            <section>
               <?php foreach($sup as $sups): ?>

                  <table>

                   <br>
                        <th>Famille :</th>
                            <td><?=$sups['libFamille']?></td>
                            <tr>
                        <th>Médicament :</th>
                            <td><?=$sups['Nom_produit']?><td>
                            <tr>

                        <th>Quantité :</th>
                            <td><?=$sups['Qte_stock']?></td>
                            
                     
                           <!--Bouton pour Modifier-->
                        <a href="?target=fmodification&produit=<?= $sups['idMedicament']?>">Modifier</a>
                        <p></p>
                  </table>
               <?php endforeach; ?>
               <br>
            </section>

	</body>
</html>
