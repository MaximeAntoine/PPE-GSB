<?php
if(!isset($_REQUEST['action']))
{
    $_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action)
{
    case 'demandeConnexion':
    {
        include("vues/v_connexion.php");
        break;
    }
    case 'valideConnexion':
    {
        $login = $_REQUEST['login'];
        $mdp = $_REQUEST['mdp'];
        $visiteur = $pdo->getInfosVisiteur($login,$mdp);
        if(!is_array($visiteur))
        {
            ajouterErreur("Login ou mot de passe incorrect");
            include("vues/v_erreurs.php");
            include("vues/v_connexion.php");
        }
        else
        {
            $id = $visiteur['VIS_MATRICULE'];
            $nom =  $visiteur['VIS_NOM'];
            $prenom = $visiteur['VIS_PRENOM'];
            $type = $visiteur['VIS_TYPE'];
            $_SESSION['login']= $login; // mémorise les variables de session
            $_SESSION['vis_matricule']= $id;
            $_SESSION['nom']= $nom;
            $_SESSION['prenom']= $prenom;
            $_SESSION['type'] = $type;
            switch ($_SESSION['type'])
            {
                case 'V' :
                {
                    include("vues/v_sommaireVisiteur.php");
                    break;
                }
                case 'D' :
                {
                    include("vues/v_sommaireDelegue.php");
                    break;
                }
                case 'R' :
                {
                        include("vues/v_sommaireResponsable.php");
                }
            }
            include("vues/v_accueil.php");
        }
        break;
    }
    case 'deconnexion':
    {
        session_destroy();
        include("vues/v_deconnexion.php");
        include("vues/v_connexion.php");
        break;
    }
    default :
    {
        include("vues/v_connexion.php");
        break;
    }
}
?>