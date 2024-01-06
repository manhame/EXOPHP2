<h1>Exercice 7</h1>

<p>créer fonction pour générer checkbox</p>

<h2>Résultat</h2>

<input type="checkbox" id="choix1" name="choix1" />
    <label for="choix1">Choix 1</label><br>
<input type="checkbox" id="choix2" name="choix2" />
    <label for="choix2">Choix 2</label><br>
<input type="checkbox" id="choix3" name="choix3" />
    <label for="choix3">Choix 3</label><br>

<br>

<?php

$elements = ["Choix1", "Choix2", "Choix3","Choix4"];

$resultat =  "<form method='post' action=''>";
foreach ($elements as $choix) {
   $resultat .= "<input type='checkbox' name='$choix' value='$choix' id='$choix'> 
   <label for='$choix'> $choix<br>";      // pas besoin de value dans le contexte de l'exercice mais le mettre car des valeurs saisies en réalité
}
$resultat .= "</form>";
   echo $resultat;
?>

