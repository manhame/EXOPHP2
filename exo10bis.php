<h1>Exercice 10</h1>

<p>Créer un formulaire complet</p>

<h2>Résultat</h2>

<?php

$nomsInput = ["Nom","Prénom","Ville", "email", "Sexe","Autre"];
$elements = ["Développeur logiciel", "Designer Web", "Intégrateur","Chef de projet"];


$resultat =  "<form method='post' action=''>";
foreach ($nomsInput as $coordonnees) {
    $resultat .=  "<label for='$coordonnees'> $coordonnees : <br>
        <input type='text' name='$coordonnees' id='$coordonnees' /><br>";
}

foreach ($elements as $choix) {
   $resultat .= "<input type='radio' name='choix' id='$choix' value='$choix'>
   <label for='$choix'> $choix<br>";
}
$resultat .= "<button type='submit'>Valider</button>";
$resultat .= "</form>";
echo $resultat;