<h1>Exercice 9</h1>

<p>créer fonction boutons radio</p>

<h2>Résultat</h2>

<input type="radio" name="Genre" value = "Masculin" id="Masculin">
    <label for="Masculin">Masculin <br>
<input type="radio" name="Genre" value = "Féminin" id = "Féminin">
    <label for="Féminin">Féminin <br>
<input type="radio" name="Genre" value = "Autre" id = "Autre"> <!--ne pa oublier id = "label" pour lier le label et l'input (montre le champ quand on survole le label) --> 
    <label for="Autre">Autre <br>
<br>

<?php

$nomsradio = ["Masculin", "Féminin", "Autre", "ind"]; 

$resultat = "";

foreach ($nomsradio as $genre) {
   $resultat .= "<input type='radio' name='genre'  value = '$genre' id = '$genre' > 
        <label for='$genre'>$genre <br>";  /*ne pas oublier id = '$value' même raison que ci-dessus en HTML - 
                                                pas de '$variable' dans name = quand on veut cocher qu'une case (radio) */
}

echo $resultat;