<?php
	session_start();
	if(!isset($_SESSION["autoriser"])&& (isset($_SESSION["autoriser"]) && $_SESSION["autoriser"] != "oui") || ( (isset($_REQUEST["target"]) && $_REQUEST["target"] != "inscription"))){
		require("Models/login.php");
	}else{
		if(isset($_REQUEST["target"])){
			switch($_REQUEST["target"]){
				case "approv":
					require("Models/approv.php");
					break;
				case "changement":
					require("Models/changement.php");
					break;
				case "contacter":
					require("Models/contacter.php");
					break;
				case "contexte":
					require("Models/contexte.php");
					break;
				case "fconnexion":
					require("Models/form_connexion.php");
					break;
				case "fisncription":
					require("Models/form_inscription.php");
					break;
				case"deconnexion":
					require("Models/deconnexion.php");
					break;
				case "fmodification":
					require("Models/form_modification.php");
					break;
				case "info":
					require("Models/info.php");
					break;
				case "inscription":
					require("Models/inscription.php");
					break;
				case "menu":
					require("Models/menu.php");
					break;
				case "bienvenue":
					require("Models/bienvenue.php");
					break;
				case "login":
					require("Models/login.php");
					break;
				case "modifier":
					require("Models/modifier.php");
					break;
				case "newfam":
					require("Models/newfam.php");
					break;
				case "probleme":
					require("Models/probleme.php");
					break;
				case "recherche":
					require("Models/recherche.php");
					break;
				case "session":
					require("Models/session.php");
					break;
				case "supp":
					require("Models/supp.php");
					break;
				case "supprimer":
					require("Models/supprimer.php");
					break;
				case "valid_mod":
					require("Models/valid_mod.php");
					break;
			}	

		}else{
			require("Models/login.php");
		}
	}



?>