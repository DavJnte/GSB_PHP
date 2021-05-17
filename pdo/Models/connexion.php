<?php
	try   
	{   
	   $bdd = new PDO('mysql:host=localhost;dbname=gsb_medicament;charset=utf8','root', 'root');
	   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}   
	   catch (Exception $e)   
	   { 
		echo $e->getMessage();
	}
?>
<!--Test connexion avec la BDD-->