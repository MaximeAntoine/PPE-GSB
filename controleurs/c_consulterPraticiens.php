<?php
include ("vues/v_sommaire.php");
$patriciens = $pdo->getPraticiens();
include ("vues/v_lesPraticiens.php");

$action = $_REQUEST['action'];

switch ($action){
    case 'detail':{
            $idPatricien = $_REQUEST['idPraticien'];
            $patriciens = $pdo->UnPatricien($idPatricien);
            include ("vues/v_detailPatricien.php");
            break;
    }
    case 'tous':{
            
            break;
    }
}

?>
