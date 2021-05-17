<?php
rinclude(__DIR__ ."/../Models/connexion.php");
if (
    isset($_POST['libFamille'])
) {
    $sql = "INSERT INTO famille(libFamille) VALUES  ( '" . $_POST['libFamille'] . "')";
    $retour = $bdd->exec($sql);

    //Si requete bien executé alors message de confirmation :
    if ($retour) {?>
                         <h1>Le Nom a bien été ajouté à la liste</h1>
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