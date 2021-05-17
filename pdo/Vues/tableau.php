<?php 

//nécessité d'une connexion a la bdd 
  include(__DIR__ ."/../Models/connexion.php");
  
//requete pour afficher tableau dans menu 
  $reponse=$bdd->query('SELECT Nom_produit , Qte_stock , libFamille FROM medicament INNER JOIN famille on idFamilleMedicament = idFamille');

  $reponsefams=$bdd->query('SELECT  Distinct libFamille FROM famille ');

?>

