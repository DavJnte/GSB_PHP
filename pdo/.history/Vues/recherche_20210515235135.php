<?php
include(__DIR__ ."/../Models/connexion.php");
if(isset($_POST['search']) AND !empty($_POST['search'])){

$recherche='%'.$_POST['search'].'%';

//Recherche dans la Table le nom du produit
$req = $bdd->prepare("SELECT medicament.Nom_produit,Qte_stock,libFamille FROM medicament INNER JOIN famille on medicament.idFamilleMedicament = famille.idFamille WHERE Nom_produit LIKE :Nom_produit");
$req->bindValue(':Nom_produit', $recherche,  PDO::PARAM_STR);
$req->execute();
$rep=$req->fetchAll();

//Si le produit n'est pas dans la table alors affiche le message :
if(!$rep)
{
echo "Ce produit n'est pas dans le stock";
}
else
{
//Sinon parcours toute les lignes de la table et affiche le nom du médicament recherché
foreach($rep as $ligne)
{   echo"\n";
    echo'Médicament: ';
    echo $ligne["Nom_produit"];
    echo'    ';
    echo' / ';
    echo'   ';
    echo'Quantité:';
    echo "\n";
    echo $ligne["Qte_stock"];
    echo'    ';
    echo' / ';
    echo $ligne["libFamille"];
    echo"\n" ;
    ?>
    <br>
    <br>
    <?php
          
}
}

}
?>