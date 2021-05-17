<?php 
  include(__DIR__ ."/../Models/connexion.php");

  $reponse=$bdd->query('SELECT Nom_produit , Qte_stock , libFamille FROM medicament INNER JOIN famille on idFamilleMedicament = idFamille');

  $reponsefams=$bdd->query('SELECT  Distinct libFamille FROM famille ');

?>

