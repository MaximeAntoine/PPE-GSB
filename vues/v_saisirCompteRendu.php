<?php
	echo "<h1>Saisie du compte rendu</h1>";

	echo "
	<form action='#' method='post'>
		<table><tr><td>
			<table>
			<tr><td row='2'><h2>Informations du rapport</h2></td></tr>
			<tr>
				<td>
				Date de la visite:
				</td>
					
				<td>
					<input type='text' name='dateVisite' placeholder='jj/mm/aaaa'/>
				</td>
			</tr>

			<tr>
				<td>
				Motif de la visite:
				</td>
					
				<td>
				<textarea name='motif' rows='6' cols='70'></textarea>
				</td>
			</tr>

			<tr>
				<td>
				Bilan:
				</td>

				<td>
					<textarea name='bilan' rows='6' cols='70'></textarea>
				</td>
			</tr>

			<tr><td row='2'><h2>Informations du praticien</h2></td></tr>

			<tr>
				<td>
				Praticien:
				</td>
					
				<td>
					<select id='selectPraticiens' name='numeroPraticien'>
						".$listeOptionPraticiens."
					</select>
				</td>
			</tr>

			<tr>
				<td>
				Coéfficient (mise à jour):
				</td>

				<td>
					<input type='text' name='coefficient' id='coefficient' value=''/>
				</td>
			</tr>

			<tr>
				<td>
				Est-il remplacant ?
				</td>
					
				<td>
					<input type='checkbox' name='checkRemplacant'/>
					<!--<select name='numRemplacant'>
						".$listeOptionPraticiens."
					</select>-->
				</td>
			</tr>
			</table>
		</td></tr>
		<tr><td>

			<h2>Éléments présentés</h2>

			<table style='width:100%'>
			<tr>
				<td>
					Produit 1:
				</td>

				<td>
					<select name='produitUn'>
						".$listeOptionMedicaments."
					</select>

					<input type='text' name='qteProduitUn' placeholder='Quantité' value='0'/>
				</td>
			</tr>

			<tr>
				<td>
					Produit 2:
				</td>

				<td>
					<select name='produitDeux'>
						".$listeOptionMedicaments."
					</select>

					<input type='text' name='qteProduitDeux' placeholder='Quantité' row='5' value='0'/>
				</td>
			</tr>

			<tr>
				<td>
					Documentation offerte ?
				</td>

				<td>
					<input type='checkbox' name='checkDocOfferte'/>
				</td>
			</tr>


			</table>
		</td></tr></table>
		<center><input type='submit' value='Ajouter'/></center>
	</form>
	";
