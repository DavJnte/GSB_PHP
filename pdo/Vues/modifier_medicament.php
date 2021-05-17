<?php
    include(__DIR__ ."/../Models/connexion.php");
    //Si les champs sont rempli alors connexion a la BDD puis modif
    if(isset($_POST['Nom_produit']) && isset($_POST['Qte_stock']) && isset($_POST['lib'])){
        $idFamille =$bdd->query("SELECT idFamille from famille where libFamille = '".$_POST["lib"]."'")->FetchAll()[0][0];
        $req='UPDATE medicament SET Nom_produit="'.$_POST['Nom_produit'].'" , Qte_stock='.$_POST['Qte_stock'].' , idFamilleMedicament='.$idFamille.' WHERE idMedicament='.$_POST['idMedicament'];
        $retour = $bdd->exec($req);
        //Si requete bien executer alors Message :
        if($retour){
        ?>
    
            <h1>Le Médicament a été correctement modifié</h1>
        <?php
            }
        else{
        ?>
            <h1>Aucune Modification réalisée</h1>
    
    <?php
        }
    }

?>