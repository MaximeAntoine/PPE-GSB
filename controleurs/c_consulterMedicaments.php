<?php
if ($_SESSION['type'] == 'V')
{
include("vues/v_sommaireVisiteur.php");
$medicaments = $pdo->getMedicaments();
if (!isset($_REQUEST['num'])){
    $num = 0;
}else{
    $num = $_REQUEST['num'];
}
include("vues/v_lesMedicaments.php");

}
elseif($_SESSION['type'] == 'D')
{
    include("vues/v_sommaireDelegue.php");
}

?>