    <!-- Division pour le sommaire -->
<div id="menuGauche">
    <div id="infosUtil">
        <h2>
        </h2>
    </div>  
    <ul id="menuList">
        <li>
            Bienvenue :<br>
            <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
        </li>
        <br/>
        <li class="smenu">
            <a href="index.php?uc=" title="Voir les statistiques">Statistiques du secteur</a>
        </li>
        <li>
            <a href="index.php?uc=" titles="Voir les graphiques">Graphiques</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>
</div>
