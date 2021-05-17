<?php
    include(__DIR__ ."/../Models/connexion.php");
    //Efface le médicament qui a été selectionné
    $reponse=$bdd->prepare('DELETE FROM medicament WHERE idMedicament=:num LIMIT 1');

    $reponse->bindValue(':num', $_GET['produit'], PDO::PARAM_INT );

    $reponseok=$reponse->execute();

    //Si requete effetué alors message de confirmation :
    if($reponseok){
?>
<h1>Le Médicament a été correctement éffacé</h1>
<?php
    }
    //Sinon message erreur
    else{
?>
<h1>Echec de la Suppression</h1>
<?php
    }
?>