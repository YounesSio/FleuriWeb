<?php
echo "Voici le catalogue de fleurs:";
echo "<table id='catalogue'><tr><th>Photo</th><th>Référence</th><th>Désignation</th><th>Prix</th></tr>";

foreach ($donnees as $row ) {
	echo  '<tr><td><img src="'.base_url('Images/').$row['DenominationImage'].'.JPG"</img></td><td>'.$row['RefProduit'].'</td><td>'.$row['Designation'].'</td><td>'.$row['Prix'].'€</tr>'.'<br/>';  
} 

echo "</table>";

echo "<br/><br/>";
//-------------------------------------------------

echo '<p>';
echo '<form>';
echo "<br/><br/>";
echo 'Réference du produit: ';
echo'<select width="500"  name="Liste_Ref">';
foreach ($test as $test2 ) {
	
	echo'<option value='.$test2["RefProduit"].'>'.$test2["RefProduit"].'</option>';
	
 
} 
echo'</select>';
echo'</form>';
echo "<br/><br/>";
echo 'Quantité : ';
echo '<input type="number" name="quantite" size="3" value="1" />';
echo '</p>';
echo '<input type="submit" name="action" value="Ajouter au panier" />';
echo '</form>';
echo "<br/><br/>";


?>



  
   
  





