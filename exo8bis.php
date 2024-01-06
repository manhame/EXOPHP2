<h1>Exercice 8</h1>

<p>créer fonction permettant d'afficher n fois une image</p>

<h2>Résultat</h2>

<?php
$img = "https://my.mobirise.com/data/userpic/764.jpg)";
$repeterImage = [$img => "https://my.mobirise.com/data/userpic/764.jpg"];

for ( $img=0 ; $img < 3 ; $img++) {
   echo $repeterImage;
}