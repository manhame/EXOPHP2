<h1>Exercice 10</h1>

<p>Créer un formulaire complet</p>

<h2>Résultat</h2>

<?php

$nomsInput = ["Nom","Prénom","Ville", "email", "Sexe"];

$resultat =  "<form method='post' action=''>";
foreach ($nomsInput as $coordonnee) {
    $resultat .=  "<label for='$coordonnee'> $coordonnee : <br>
        <input type='text' name='$coordonnee' /><br>";
}
$resultat .= "</form>";
echo $resultat;

$alimenterListeDeroulante = ["Monsieur", "Madame", "Mademoiselle"];
      
      	// Parcourir le tableau
      	foreach($alimenterListeDeroulante as $value){ ?>
    		<option value="<?= strtolower($value) ?>"><?= $value ?></option>
      	<?php } ?>