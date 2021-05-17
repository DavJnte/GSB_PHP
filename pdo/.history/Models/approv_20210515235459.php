<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/App.css" />
	</head>
    <header>
		Menu Approvisionnement

        <?php
            require_once("../Models/header.php");
            include(__DIR__ ."/../Vues/tableau.php");
        ?>
	<body>
    
        <!--Menu de l'ajout d'un Medicament-->
            <section>

                <h1>Ajouter un nouveau Médicament</h1>

                    <form action="info.php" method="POST" class="form">

                        <label for="Nom_produit">Saisir le nouveau Médicament :</label>
                        <input type="text"  name="Nom_produit" required/>

                        <label for="Qte_stock">Saisir Quantité :</label>
                         <input type="number"  name="Qte_stock" min="1" required/>

                             <!--Menu des familles médicaments-->
                             
                             <label for="fam">Saisir Famille Médicament :</label>
                                <select style="font-size: 20px;" name="libFamille" required>
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

                            <p><input name=valider1 type="submit" value="Ajouter"></p>
                    </form>
                
            </section>
            <section>

            <h1>Ajouter une nouvelle Famille Médicament</h1>

                <form action="newFam.php" method="POST" class="form">


                        <!--Menu des familles médicaments-->
                        
                        <label for="fam">Saisir Nouvelle Famille :</label>
                        <input type="text" name="libFamille">

                        <p><input name=valider1 type="submit" value="Ajouter"></p>
                </form>

        </section>

                    <!--2 eme section qui affiche le tableau des Medicament-->

                    <section>
                            <!--Necessite de la connexion a la BDD-->
                            
                        <br>
                        
                        <u><h2>Médicaments en stock</h2></u>

                                <!--Affiche du tableau-->
                                <table>
                                    <tr>
                                        <th>Famille :</th>
                                        <th>Liste des Médicaments :</th>
                                        <th>Quantité :</th>
                                         
                                    </tr>  
    
                                    <?php
                                       foreach($reponse as $ligne)
                                       {         
                                           if(isset($ligne[0])){
                                    ?>
                                                <tr> 
                                                        <th><?php echo $ligne[2];?></th>
                                                        <th><?php echo $ligne[0];?></th>
                                                        <th><?php echo $ligne[1];?></th>
                                                </tr>
                                   <?php
                                       }   
                                    }
                                   ?>
                                </table>
  
                        <br>
                    </section>

                   
                                
	</body>
</html>
