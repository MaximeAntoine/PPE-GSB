<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	require_once ("../include/modele.inc.php");
	$pdo = PdoGsb::getPdoGsb();

	if(isset($_POST['numPraticien'])){
		$coefficient = $pdo->getCoeffPatricien(intval($_POST['numPraticien']));
		echo $coefficient;
	}else{
		echo "0";
	}