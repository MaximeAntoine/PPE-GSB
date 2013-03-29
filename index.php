<?php
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require_once("include/fct.inc.php");
require_once ("include/modele.inc.php");
include("vues/v_entete.php");

$pdo = PdoGsb::getPdoGsb();
if(!isset($_REQUEST['uc']) || (!isset($_SESSION['login'])))
{
    $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc)
{
    case 'connexion':
    {
        include("controleurs/c_connexion.php");
        break;
    }
    case 'gererFrais' :
    {
        include("controleurs/c_gererFrais.php");
        break;
    }
    case 'etatFrais' :
    {
        include("controleurs/c_etatFrais.php");
        break; 
    }
    case 'Praticiens':{
        include("controleurs/c_consulterPraticiens.php");
         break; 
    }

    case 'gererCR':{
        include("controleurs/c_gererCR.php");
         break; 
    }

    case 'Medicaments':{
        include("controleurs/c_consulterMedicaments.php");
        break;
    }
    
}
include("vues/v_pied.php") ;
?>

