<h1>Exercice 1</h1>

<p>créer fonction MAJ rouge</p>

<h2>Résultat</h2>

<style>
    .red {
        color: red;
    }
    </style>

<?php


$texte = "Mon texte en paramètre";

echo convertirMajRouge($texte);

function convertirMajRouge($texte) {
    $result = mb_strtoupper ($texte);
    $result = "<p class = 'red'>".$result."</p>";

          return $result;
}

?>




