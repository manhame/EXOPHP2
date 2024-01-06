<h1>Exercice 8</h1>

<p>créer fonction permettant d'afficher n fois une image</p>

<h2>Résultat</h2>

<img src = "http://my.mobirise.com/data/userpic/764.jpg">

<?php
$url = "http://my.mobirise.com/data/userpic/764.jpg";
$nb = 4;

for ($i=1; $i <= $nb ; $i++) { 
   echo "<img src='$url'>";
}