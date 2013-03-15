<div id="contenu">
    <table>
        <tr>
            <th> Nom </th>
            <th> Prenom </th>
            <th> Adresse </th>
            <th> Ville </th>
            <th> Coefficient Notoriete </th>
        </tr>
        <tr>
        <?php
        foreach($patriciens as $unPraticien){
            $nomP = $unPatricien['pra_nom'];
            $prenomP = $unPatricien['pra_prenom'];
            $adrP = $unPatricien['pra_adresse'];
            $villeP = $unPatricien['pra_ville'];
            $notP = $unPatricien['pra_coefnotoriete'];
        
        ?>
            <td></td>
        </tr>
    
    <?php 
        }
     ?>  
        </table>
</div>

