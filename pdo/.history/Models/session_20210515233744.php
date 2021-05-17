<?php 
require_once('Models/Message_Bienvenue_co.php');

if(@$_SESSION["autoriser"]!="oui"){
    header("location:index.php?target=menu");
    exit();
}
?>

