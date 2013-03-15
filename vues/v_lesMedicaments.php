<h1>Pharmacopee</h1>
<?php
foreach ($medicaments as $unMedicament) {
			$depot = $unMedicament['MED_DEPOTLEGAL'];
			$nom = $unMedicament['MED_NOMCOMMERCIAL'];
                        $famille = $unMedicament['FAM_CODE'];
                        $compo = $unMedicament['MED_COMPOSITION'];
                        $effet = $unMedicament['MED_EFFETS'];
                        $cindic = $unMedicament['MED_CONTREINDIC'];
                        $prix = $unMedicament['MED_PRIXECHANTILLON'];
}
?>
<TABLE style="width:700px;">
    <tr><td style="width:150px;">DEPOT LEGAL :</td><td><?php echo $depot?></td></tr>
    <tr><td>NOM COMMERCIAL :</td><td><?php echo $nom?></td></tr>
    <tr><td>FAMILLE :</td><td><?php echo $famille?></td></tr>
    <tr><td>COMPOSITION :</td><td style="height: 70px"><?php echo $compo?></td></tr>
    <tr><td>EFFETS :</td><td style="height: 70px"><?php echo $effet?></td></tr>
    <tr><td>CONTRE INDIC :</td><td style="height: 70px"><?php echo $cindic?></td></tr>
    <tr><td>PRIX ECHANTILLON :</td><td><?php echo $prix?></td></tr>
    <tr><td><input type="button" value="<"/> <input type="button" value=">"></td>
</TABLE>

