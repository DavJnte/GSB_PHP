<?php
    require("Models/connexion.php");
    $modifier =$mod->prepare('SELECT * FROM medicament WHERE idMedicament= :num');
    $modifier->bindValue(':num',$_GET['produit'],PDO::PARAM_INT);
    require_once("tableau.php");
    $execute= $modifier->execute();
    $produit= $modifier->fetch();

?>