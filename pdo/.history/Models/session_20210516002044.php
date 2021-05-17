<?php 
include(__DIR__ .'/../Models/Message_Bienvenue_co.php');

if(@$_SESSION["autoriser"]!="oui"){
    header("location:index.php?target=menu");
    exit();
}
?>

