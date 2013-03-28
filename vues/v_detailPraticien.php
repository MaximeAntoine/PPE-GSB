<div id="contenu">    
    <!--<table>
        <tr>
            <th> Nom </th>
        </tr>
        <tr>
            <th> Prenom </th>
        </tr>
        <tr>
            <th> Adresse </th>
        </tr>
        <tr>
            <th> Ville </th>
        </tr>
        <tr>
            <th> Numéro Téléphone </th>
        </tr>
        <tr>
            <th> Coefficient de Notoriété </th>
        </tr>
        <tr>
            <th> Lieu d'activité </th>
        </tr>
        <tr> -->
        <?php
        foreach($detailPraticien as $unPraticien){
            //$id = $unPraticien['pra_num'];
            $nomP = $unPraticien['pra_nom'];
            $prenomP = $unPraticien['pra_prenom'];
            $adrP = $unPraticien['pra_adresse'];
            $villeP = $unPraticien['pra_ville'];
            $telP= $unPraticien['pra_tel'];
            $notP = $unPraticien['pra_coefnotoriete'];
            $typeP = $unPraticien['typ_libelle'];
            $nivDipl = $unPraticien['pos_diplome'];
            $speP = $unPraticien['spe_libelle'];
        ?>
    <h2>Nom, Prénom</h2>
        <?php echo $nomP." ".$prenomP; ?>
    <br>
    <br>
    <h2> Adresse </h2>
        <?php echo $adrP ;?>
    <br>
    <br>
    <h2> Ville </h2>
        <a href="index.php?uc=Praticiens&action=ville&id='<?php echo $villeP ;?>'"><?php echo $villeP; ?></a>
    <br>
    <br>
    <h2> Numéro de Téléphone </h2>
        <?php echo $telP; ?>
    <br>
    <br>
    <h2> Coefficient de Notoriété </h2>
        <?php echo $notP;?>
    <br>
    <br>
    <h2>Lieu d'acitivté </h2>
        <?php echo $typeP;?> 
    <br>
    <br>
    <h2> Niveau étude, Spécialité </h2>
        <?php echo $nivDipl;?>
    <br>
        <?php echo $speP;?>
        <?php 
            }
         ?> 
   <!-- </table>  -->
</div>
