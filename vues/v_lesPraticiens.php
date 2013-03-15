
      <div>
     <table >
             <tr>
                <th >Nom</th>  
                <th >Prenom</th>               
             </tr>
          
    <?php    
	   foreach ($patriciens as $unPatriciens) {
			$nomPatriciens = $unPatriciens['pra_nom'];
			$prenomPatriciens = $unPatriciens['pra_prenom'];
		?>		
            <tr> <td><?php echo $nomPatriciens ?></td>
                <td><?php echo $prenomPatriciens ?></td> </tr>
    <?php		          
          }
?>	                                          
    </table>
      </div>
</div>

