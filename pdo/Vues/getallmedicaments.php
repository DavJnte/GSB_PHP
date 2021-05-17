<!--Connexion a la BDD-->
<?php
    include(__DIR__ ."/../Models/connexion.php");
    $reponse=$bdd->query('SELECT idMedicament, Nom_produit , Qte_stock, libFamille FROM medicament INNER JOIN famille on medicament.idFamilleMedicament = famille.idFamille');
    $sup=$reponse->fetchAll();
?>