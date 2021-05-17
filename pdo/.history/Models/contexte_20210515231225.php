<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../pdo/css/App.css" />
	</head>
	<body>
		<header>

			Contexte GSB
            <!--Affichage Nom + Prenom utilisateur-->
            <span>
		    <?=$_SESSION["nomPrenom"]?>
		    </span>

            <!--Menu navigation-->
            <div class="m-right">
                <a href="#?target=deconnexion" class="m-link">Deconnexion</a>
                <a href="#?target=approv" class="m-link"> Approvisionnement</a>
                <a href="#?target=modifier" class="m-link">Modification/Suppession</a>
            </div>

            <img src="img/gsb (1).jpg" height="100px"/>  <!--Image GSB-->

		</header>

        <!--Menu d'options-->
        <label>
            <br>
             <a href="#?target=probleme" class="m-link">Doc Technique</a>
             <a href="#?target=contacter" class="m-link">Nous Contacter</a>
        </label>
         
                <p> 
                    Les produits distribués par le laboratoire sont des médicaments : ils sont identifiés par un numéro de
                    produit (dépôt légal) qui correspond à un nom commercial</p>
                    
                <p>(ce nom étant utilisé par les visiteurs et les médecins).</p> 
                <br>
                <p>
                    Comme tout médicament, un produit a des effets thérapeutiques et des contre-indications.
                    On connaît sa composition (liste des composants et quantité).
                </p>
                <p>
                    Un produit relève d’une famille (antihistaminique, antidépresseur, antibiotique, …).
                    Lors d'une visite auprès d'un médecin, un visiteur présente un ou plusieurs produits pour lesquels il
                    pourra laisser des échantillons.
                </p>

          <br>
            <!--Bouton retour-->
        <form action="#" method="POST" class="form">
            <input type="hidden" name="target" value="menu">
            <input type="submit" name="submit" value="Retour au menu principal">
        </form>

	</body>
</html>
