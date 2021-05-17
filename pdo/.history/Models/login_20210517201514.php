<?php 
include(__DIR__ .'/../Vues/co_utilisateur.php');
var_dump($_SESSION);
if(!isset($_SESSION["autoriser"]) || (isset($_SESSION["autoriser"]) && $_SESSION["autoriser"] != "oui")){
	  include(__DIR__ .'/../Models/form_connexion.php');
    #Message d'erreur si utilisateur rempli mal le formulaire
    include(__DIR__ .'/../Models/message_login.php');  
}else{
    header("location:".__DIR__."/../index.php?=menu");
}


?>

