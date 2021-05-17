<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/App.css" />
	</head>
	<body>
		<header>
			Modification Médicament
            <!--Affichage nom + prenom utilisateur-->
            <span>
		    <?=$_SESSION["nomPrenom"]?>
		    </span>	

            <br>
            <br>

            <img src="img/gsb (1).jpg" height="100px"/>  <!--Image GSB-->
		</header>
                
                <!--Connexion a la BDD-->
                <?php
                include(__DIR__ ."/../Vues/edit_medicament.php");

                ?>
 
                                    <!--Formulaire de Modification d'un Medicament-->
                        <section>
                                <u><h1>Saisir les modifications du produit</h1></u>

                                <form action="index?target=valid_mod" method="POST" class="form">
                                         <input type="hidden" required name="idMedicament" value="<?=$produit['idMedicament']?>"/>
    
                                         <label for="Nom_produit">Saisir le nouveau produit :</label>
                                         <input type="text" required name="Nom_produit" value="<?= $produit['Nom_produit'];?>"/>

                                         <label for="Qte_stock">Saisir nouvelle Quantité :</label>
                                         <input type="number" min="1" name="Qte_stock"  value="<?= $produit['Qte_stock'];?>"/>
                                        
                                         <label for="fam">Saisir Famille Médicament :</label>
                                            <select style="font-size: 20px;" name="lib" required>
                                                <?php
                                                foreach($reponsefams as $ligne){
                                                    ?>
                                                    <option>
                                                    <?php
                                                    echo $ligne['libFamille'];                                        
                                                    ?>
                                                    </option>
                                                    <?php
                                                }

                                                ?>
                                            </select>
    
                                         <p>
                                            <input name=valider1 type="submit" value="Enregistrer les modifications"  onclick="return confirm('Enregistrer la/les modification(s)?');">
                                         </p>
                                </form>

                                        <!--Bouton Retour a la sélection entre modifier/ supprimer-->
                                        <form action="?target=changement" method="POST" class="form">
                                             <input type="submit" name="submit" value="Retour à la Sélection">
                                         </form>
                            <br>
                        </section>

	</body>
</html>