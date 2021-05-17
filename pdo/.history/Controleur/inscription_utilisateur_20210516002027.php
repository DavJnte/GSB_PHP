<?php
	@$nom=$_POST["nom"];
	@$prenom=$_POST["prenom"];
	@$login=$_POST["login"];
	@$pass=$_POST["pass"];
	@$repass=$_POST["repass"];
	@$valider=$_POST["valider"];
	$message="";
	if(isset($valider)){
		if(empty($nom)) $message="<li>Nom invalide  !</li>";
		if(empty($prenom)) $message.="<li>Prénom invalide  !</li>";
		if(empty($login)) $message.="<li>Pseudo invalide  !</li>";
		if(empty($pass)) $message.="<li>Mot de passe invalide  !</li>";
		if($pass!=$repass) $message.="<li>Les Mots de passe ne sont pas identiques  !</li>";	
		if(empty($message)){
			iinclude(__DIR__ .'/../Models/connexion.php');
			$req=$pdo->prepare("select id from users where login=? limit 1");
			$req->setFetchMode(PDO::FETCH_ASSOC);
			$req->execute(array($login));
			$tab=$req->fetchAll();
			if(count($tab)>0)
				$message="<li>Login existe déjà!</li>";
			else{
				$ins=$pdo->prepare("insert into users(date,nom,prenom,login,pass) values(now(),?,?,?,?)");
				$ins->execute(array($nom,$prenom,$login,md5($pass)));
				header("location:index.php#?target=login");
			}
		}
	}
?>