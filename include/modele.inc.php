<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application exempleMVC du cours sur la bdd bddemployés
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdo qui contiendra l'unique instance de la classe
 * @package default
 * @author AP
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoGsb{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=gsb_visiteurs';   		
      	private static $user='root' ;    		
      	private static $mdp='root' ;
        private static $monPdo;
	private static $monPdoGsb=null;

/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct(){
        try {
    	PdoGsb::$monPdo = new PDO(PdoGsb::$serveur.';'.PdoGsb::$bdd, PdoGsb::$user, PdoGsb::$mdp); 
		PdoGsb::$monPdo->query("SET CHARACTER SET utf8");
	
        } catch (Exception $e) {
            throw new Exception("Erreur Ã  la connexion \n" . $e->getMessage());
        }
        }

	public function _destruct(){
		PdoGsb::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe PdoExemple
 
 * Appel : $instancePdoExemple = PdoExemple::getPdoExemple();
 
 * @return l'unique objet de la classe PdoExemple
 */
	public  static function getPdoGsb(){
		if(PdoGsb::$monPdoGsb==null){
			PdoGsb::$monPdoGsb= new PdoGsb();
		}
		return PdoGsb::$monPdoGsb;  
	}
   public function getInfosVisiteur($login,$mdp){
       // retourne un tableau associatif contenant le visiteur
         $req="select VIS_MATRICULE, VIS_NOM ,VIS_PRENOM, VIS_TYPE from visiteur where LOGIN = '$login' and MDP = '$mdp'";
       //$req="select VIS_MATRICULE, VIS_NOM ,VIS_PRENOM from visiteur where LOGIN = 'test' and MDP = 'test'";
         $rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetch(PDO::FETCH_ASSOC);
		return $ligne;
        }
   public function getLesVisiteurs() {
     // retourne un tableau associatif contenant tous les visiteurs
         $req="select vis_matricule, VIS_NOM, VIS_VILLE from visiteur";
         $rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
		return $ligne;
        // ou return $this->_pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMedicaments() {
     // retourne un tableau associatif contenant tous les visiteurs
         $req="select * from medicament";
         $rs = PdoGsb::$monPdo->query($req);
    $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
    return $ligne;
        // ou return $this->_pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }
    
   public function getPraticiens(){
       // retourne un tableau associatif contenant tous les praticiens 
       $req="Select pra_num,pra_nom,pra_prenom,pra_adresse,pra_cp,pra_ville,pra_coefnotoriete
             from praticien order by pra_nom";
       $rs = PdoGsb::$monPdo->query($req);
            $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
            return $ligne;
   }
   
   public function getUnPatricien($idPraticien){
       // retourne un tableau associatif contenant les informations d'un praticiens
       $req="Select pra_nom,pra_prenom,pra_adresse,pra_cp,pra_ville
             from praticien
             where pra_num=".$idPraticien."";
       $rs = PdoGsb::$monPdo->query($req);
            $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
            return $ligne;
   }

   public function ajouteCompteRendu($dateSaisie, $motif, $bilan, $numeroPraticien,$coefficient, $checkRemplacant, $produitUn, $produitDeux, $checkDocOfferte, $qteProduitUn, $qteProduitDeux){
      $newDate = date("Y-m-d", strtotime($dateSaisie))." 00:00:00";

      //récupère l'id de rapport le plus grand pour un praticien
      $sqlSelect = "SELECT MAX(RAP_NUM) as numMax FROM rapport_visite WHERE VIS_MATRICULE = '".$_SESSION['vis_matricule']."'";
      $rs = PdoGsb::$monPdo->query($sqlSelect);
      $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
      
      $numeroRap = 0;
      if(count($ligne) >= 0)
        $numeroRap = $ligne[0]['numMax'];

      $numeroRap++;
    
      //Ajoute le rapport de visite
      $sqlInsertRapport = "INSERT INTO rapport_visite VALUES ('".$_SESSION['vis_matricule']."', ".$numeroRap.", '".$numeroPraticien."', '".$newDate."', '".$bilan."', '".$motif."', '".$checkDocOfferte."', '".$checkRemplacant."')";
      $r = PdoGsb::$monPdo->exec($sqlInsertRapport);

      //Ajoute les produits offerts
      $sqlInsertOffrirProduitUn = "INSERT INTO offrir VALUES ('".$_SESSION['vis_matricule']."', ".$numeroRap.", '".$produitUn."', ".$qteProduitUn.")";
      $r = PdoGsb::$monPdo->exec($sqlInsertOffrirProduitUn);

      $sqlInsertOffrirProduitDeux = "INSERT INTO offrir VALUES ('".$_SESSION['vis_matricule']."', ".($numeroRap).", '".$produitDeux."', ".$qteProduitDeux.")";
      $r = PdoGsb::$monPdo->exec($sqlInsertOffrirProduitDeux);

      //modifie le coefficient du praticien
      $sqlUpdate = "UPDATE praticien SET PRA_COEFNOTORIETE = ".$coefficient." WHERE PRA_NUM = ".$numeroPraticien;
      $r = PdoGsb::$monPdo->exec($sqlUpdate);
   }
}   
  ?>
