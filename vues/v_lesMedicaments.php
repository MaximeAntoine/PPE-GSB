<div id="medicaments"><h1>Pharmacopee</h1>
<?php
			$depot = $medicaments[$num]['MED_DEPOTLEGAL'];
			$nom = $medicaments[$num]['MED_NOMCOMMERCIAL'];
                        $famille = $medicaments[$num]['FAM_CODE'];
                        $compo = $medicaments[$num]['MED_COMPOSITION'];
                        $effet = $medicaments[$num]['MED_EFFETS'];
                        $cindic = $medicaments[$num]['MED_CONTREINDIC'];
                        $prix = $medicaments[$num]['MED_PRIXECHANTILLON'];

?>
<TABLE style="width:700px;">
    <tr><td style="width:150px;">DEPOT LEGAL :</td><td><?php echo $depot?></td></tr>
    <tr><td>NOM COMMERCIAL :</td><td><?php echo $nom?></td></tr>
    <tr><td>FAMILLE :</td><td><?php echo $famille?></td></tr>
    <tr><td>COMPOSITION :</td><td style="height: 70px"><?php echo $compo?></td></tr>
    <tr><td>EFFETS :</td><td style="height: 70px"><?php echo $effet?></td></tr>
    <tr><td>CONTRE INDIC :</td><td style="height: 70px"><?php echo $cindic?></td></tr>
    <tr><td>PRIX ECHANTILLON :</td><td><?php echo $prix?></td></tr>
    <tr><td>
    <?php if ($num == 0){
    ?><a href="index.php?uc=Medicaments&num=<?php echo $num-1;?>"><input type="button" value="<" disabled="disabled"/></a></td>
        <td><a href="index.php?uc=Medicaments&num=<?php echo $num+1;?>"><input type="button" value=">"/></a></td></tr>
    <?php }
    else
        if($num == 27){
        ?>
        <a href="index.php?uc=Medicaments&num=<?php echo $num-1;?>"><input type="button" value="<"/></a></td>
            <td><a href="index.php?uc=Medicaments&num=<?php echo $num+1;?>"><input type="button" value=">" disabled="disabled"/></a></td></tr>
        <?php }
            else{
            ?>
            <a href="index.php?uc=Medicaments&num=<?php echo $num - 1; ?>"><input type="button" value="<"/></a></td>
            <td><a href="index.php?uc=Medicaments&num=<?php echo $num + 1; ?>"><input type="button" value=">"/></a></td></tr>
            <?php }
            ?>
</TABLE>
</div>
   

