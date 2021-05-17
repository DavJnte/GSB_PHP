<?php
require("../Models/connexion.php");
if (isset($_POST['Nom_produit']) && isset($_POST['Qte_stock']) && isset($_POST['libFamille'])) {
    $idFamille = $bdd->query("SELECT idFamille from famille where libFamille = '" . $_POST["libFamille"] . "'")->FetchAll()[0][0];
    $sql = "INSERT INTO medicament(Nom_produit,Qte_stock,idFamilleMedicament) VALUES ('" . $_POST['Nom_produit'] . "' ," . $_POST['Qte_stock'] . " , '" . $idFamille . "')";
    $retour = $bdd->exec($sql);

    //Si requete bien executé alors message de confirmation :
    if ($retour) {?>
                         <h1>La Mise à Jour du stock Médicament a bien été effectué</h1>
                    <?php
}
    //Sinon Message d'erreur
    else {
        ?>
                 <h1>Erreur d'enregistrement dans la BDD</h1>
                 <?php
}

}
?>