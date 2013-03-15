<?php
include ("vues/v_sommaire.php");
$patriciens = $pdo->getPraticiens();
include ("vues/v_lesPraticiens.php");
?>
