<?php
if ($_SESSION['type'] == 'V')
{
include("vues/v_sommaireVisiteur.php");
$medicaments = $pdo->getMedicaments();
include("vues/v_lesMedicaments.php");
}
elseif($_SESSION['type'] == 'D')
{
    include("vues/v_sommaireDelegue.php");
}

?>