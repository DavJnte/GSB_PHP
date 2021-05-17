    <!--Affichage nom + Prenom utilisateur-->
        <span>
        <?=$_SESSION["nomPrenom"]?>
    </span>

    <!--Menu pour naviguer-->
    <div class="m-right">
        <a href="?target=deconnexion" class="m-link">Déconnexion</a>
        <a href="?target=menu" class="m-link">Menu Principal</a>
        <a href="?target=approv" class="m-link"> Approvisionnement</a>
        <a href="?target=modifier" class="m-link">Modification/Suppession</a>
    </div>
    <img src="../pdo/img/gsb (1).jpg" height="100px"/>  <!--Image GSB-->
</header>