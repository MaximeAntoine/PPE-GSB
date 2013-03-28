<?php
if ($_SESSION['type'] == 'V')
{
include ("vues/v_sommaireVisiteur.php");
}
else if($_SESSION['type'] == 'D')
{
    include("vues/v_sommaireDelegue.php");
}

if(!isset($_REQUEST['action']))
{
    $_REQUEST['action'] = 'liste';
}
$action = $_REQUEST['action'];
switch ($action)
{
    case 'liste':
    {
        $patriciens = $pdo->getPraticiens();
        include ("vues/v_lesPraticiens.php");
        break;
    }
    case 'detail':
    {
        $id = $_REQUEST['id'];
        $detailPraticien = $pdo->getUnPatricien($id);
        include("vues/v_detailPraticien.php");
        break;
    }
    case 'ville':
    {
            $id = $_REQUEST['id'];
            $villePraticien = $pdo->getVillePraticien($id);
            include ("vues/v_villePraticien.php");
            break;
    }
}
    

?>
