<h1>Exercice 6</h1>

<p>Alimenter une liste déroulante<p>

    <select>
    	<option selected="selected">Sélectionner une valeur</option>

      	<?php
     	$alimenterListeDeroulante = ["Monsieur", "Madame", "Mademoiselle"];
      
      	// Parcourir le tableau
      	foreach($alimenterListeDeroulante as $value){ ?>
    		<option value="<?= strtolower($value) ?>"><?= $value ?></option>
      	<?php } ?>
    </select>

<h1>Exercice 6</h1>

<p>Variante<p>

<select>
	<option value="Monsieur">Monsieur</option>
	<option value="Madame">Madame</option>
	<option value="Mademoiselle">Mademoiselle</option>
</select><br>

<?php
$alimenterListeDeroulante = ["Monsieur", "Madame", "Mademoiselle", "Autre"];
$resultat= "<select>";
foreach($alimenterListeDeroulante as $value){
	$resultat .= "<option value='$value'>$value</option>";
}
$resultat .= "</select>";
echo $resultat;