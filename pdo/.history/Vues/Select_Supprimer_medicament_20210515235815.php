<?php
    include(__DIR__ ."/../odels/connexion.php");
    //Rentre dans la table avec une requête
    $reponse=$bdd->query('SELECT idMedicament, Nom_produit , Qte_stock, libFamille FROM medicament INNER JOIN famille on medicament.idFamilleMedicament = famille.idFamille');
    $sup=$reponse->fetchAll(); // -> Parcours les données de la table
?>