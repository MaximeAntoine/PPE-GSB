<div id="contenu">
     
    <table>
        <tr>
            <th> Nom </th>
            <th> Prenom </th>
            <th> Adresse </th>
            <th> Ville </th>
            <th> Informations Complémentaire </th>
        </tr>
        <tr>
        <?php
        foreach($patriciens as $unPraticien){
            $id = $unPraticien['pra_num'];
            $nomP = $unPraticien['pra_nom'];
            $prenomP = $unPraticien['pra_prenom'];
            $adrP = $unPraticien['pra_adresse'];
            $villeP = $unPraticien['pra_ville'];
            $notP = $unPraticien['pra_coefnotoriete'];
            
            
        ?>
            <td><?php echo $nomP ;?></td>
            <td><?php echo $prenomP ;?></td>
            <td><?php echo $adrP;?></td>
            <td><a href="index.php?uc=Praticiens&action=ville&id='<?php echo $villeP ;?>'"><?php echo $villeP; ?></a></td>      
            <td><a href="index.php?uc=Praticiens&action=detail&id='<?php echo $id; ?>'">détail</a></td>
        </tr>
    
        <?php 
            }
         ?> 
    </table>
    
</div>



