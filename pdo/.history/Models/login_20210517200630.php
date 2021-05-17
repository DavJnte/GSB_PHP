<?php 
	echo("merd");

include(__DIR__ .'/../Vues/co_utilisateur.php');

if(!isset($_SESSION["autoriser"]) ||( !(isset($_REQUEST["target"]) && $_REQUEST["target"] == "inscription"))){
    include(__DIR__ .'/../Models/form_connexion.php');
    #Message d'erreur si utilisateur rempli mal le formulaire
    include(__DIR__ .'/../Models/message_login.php');  
}


?>

