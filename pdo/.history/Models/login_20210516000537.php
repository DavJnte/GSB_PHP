<?php 

include(__DIR__ .'/../Controleur/co_utilisateur.php');
if(isset($_SESSION["autoriser"])){
    include(__DIR__ .'/../Models/form_connexion.php');
    #Message d'erreur si utilisateur rempli mal le formulaire
    include(__DIR__ .'/../Models/message_login.php');  
}


?>

