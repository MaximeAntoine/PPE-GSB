﻿    <!-- Division pour le sommaire -->
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
        <!--Non cliquable pour l'instant-->
        <li class="smenu">
            <a href="index.php?uc=gererCR&action=saisirCR" title="Nouveaux comptes rendus">Nouveaux CR</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=" title="Consulter les comptes rendus">Consulter</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=Medicaments" title="Consulter les médicaments">Médicaments</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=Praticiens" title="Consulter les praticiens">Praticiens</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=" title="Activité des visiteurs">Voir activité</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>
</div>
