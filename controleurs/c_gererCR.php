<?php
if($_SESSION['type'] == "V")
	include("vues/v_sommaireVisiteur.php");
else if($_SESSION['type'] == "D")
	include("vues/v_sommaireDelegue.php");


$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['vis_matricule'];

switch($action){
	case 'saisirCR': {
		if(isset($_POST) && count($_POST) && isset($_POST['dateVisite']) && isset($_POST['motif']) && isset($_POST['bilan']) && isset($_POST['numeroPraticien']) && isset($_POST['coefficient']) && isset($_POST['produitUn']) && isset($_POST['produitDeux']) && isset($_POST['qteProduitUn']) && isset($_POST['qteProduitDeux'])){
			/*
	
				Si on a les champs nécessaire pour l'ajout en bdd

			*/

			$dateVisite = $_POST['dateVisite'];
			$motif = $_POST['motif'];
			$bilan = $_POST['bilan'];

			$numeroPraticien = $_POST['numeroPraticien'];
			$coefficient = $_POST['coefficient'];

			if(isset($_POST['checkRemplacant']))
				$checkRemplacant = true;
			else
				$checkRemplacant = false;

			$produitUn = $_POST['produitUn'];
			$produitDeux = $_POST['produitDeux'];

			$qteProduitUn = intval($_POST['qteProduitUn']);
			$qteProduitDeux = intval($_POST['qteProduitDeux']);

			if(isset($_POST['checkDocOfferte']))
				$checkDocOfferte = true;
			else
				$checkDocOfferte = false;

			$resultat = $pdo->ajouteCompteRendu($dateVisite, $motif, $bilan, $numeroPraticien,$coefficient, $checkRemplacant, $produitUn, $produitDeux, $checkDocOfferte, $qteProduitUn, $qteProduitDeux);

			include("vues/v_ajoutCompteRendu.php");
		}else{
			/*

				Sinon on affiche le formulaire

			*/

			$lesPraticiens = $pdo->getPraticiens();
			$lesMedicaments = $pdo->getMedicaments();

			$listeOptionPraticiens = "";
			foreach ($lesPraticiens as $p) {
				$listeOptionPraticiens .= "<option value='".$p['pra_num']."'>".$p['pra_nom']." ".$p['pra_prenom']."</option>";
			}

			$listeOptionMedicaments = "";
			foreach ($lesMedicaments as $m) {
				$listeOptionMedicaments .= "<option value='".$m['MED_DEPOTLEGAL']."'>".$m['MED_NOMCOMMERCIAL']."</option>";
			}

			?>

			<script>
				$('.target').change(function() {
					alert('Handler for .change() called.');
				});
			</script>

			<?php
			include("vues/v_saisirCompteRendu.php");
		}	
	}
}

?>