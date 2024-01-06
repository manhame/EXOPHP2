<h1>Exercice 5</h1>

<p>créer fonction formulaire</p>

<h2>Résultat</h2>

<form method="post" action="">
<label for='nom'> Nom : </label><br>
   <input type="text" name="nom" /><br />
<label for='prenom'> Prénom : </label><br>  
   <input type="text" name="prenom" /><br />
<label for='ville'> Ville : </label><br>
   <input type="text" name="ville" /><br />
</form><br>

<?php

$nomsInput = ["Nom","Prénom","Ville","Téléphone","Lieu de naissance"];

$resultat =  "<form method='post' action=''>";
foreach ($nomsInput as $coordonnee) {
    $resultat .=  "<label for='$coordonnee'> $coordonnee : </label><br>
        <input type='text' name='$coordonnee' id='$coordonnee' placeholder='Saisissez : $coordonnee' /><br>";
}
$resultat .= "</form>";
echo $resultat;
