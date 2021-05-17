    <!--Affichage nom + Prenom utilisateur-->
        <span>
        <?=$_SESSION["nomPrenom"]?>
    </span>

    <!--Menu pour naviguer-->
    <div class="m-right">
        <a href="deconnexion.php" class="m-link">Déconnexion</a>
        <a href="menu.php" class="m-link">Menu Principal</a>
        <a href="approv.php" class="m-link"> Approvisionnement</a>
        <a href="modifier.php" class="m-link">Modification/Suppession</a>
    </div>
    <img src="../pdo/img/gsb (1).jpg" height="100px"/>  <!--Image GSB-->
</header>