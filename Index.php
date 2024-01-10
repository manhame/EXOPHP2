<h1>Instanciation et affichage</h1>

<?php

function chargerClasse($classe) {
    require $classe.'.php';
}
spl_autoload_register('chargerClasse');

$a1 = new Auteur ("Stephen","King");
$l1 = new Livre ("Ca","1986",1138,20);
$l2 = new Livre ("Simetierre","1983",374,15);
$l3 = new Livre ("Le Fléau","1978",823,14);
$l4 = new Livre ("Shining","1977",447,16);

echo "Livres de ".$a1 -> getPrenom()." ".$a1 -> getNom()."<br>";
echo "<br>";
echo $l1 -> getInfos ()."<br>";
echo $l2 -> getInfos ()."<br>";
echo $l3 -> getInfos ()."<br>";
echo $l4 -> getInfos ();

