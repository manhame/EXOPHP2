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

$t1 = new Titulaire ("Prénom", "Nom", "02/04/1968", "Ville");
//echo $t1 -> getInfos()."<br>";
echo $t1 -> getPrenom()." ".$t1 -> getNom()."<br>";
echo $t1 -> getVille()."<br>";
echo $t1 -> getDatediff()."<br>";

$c1 = new Compte ("Libellé", "Solde","Devise" ,"Titulaire" );
//echo $c1 -> getInfos()."<br>";
echo $c1 -> getLibelle()." solde : ".$c1 -> getSoldeInitial()." ".$c1 -> getDeviseMonetaire()."<br>";
echo $t1 -> getTitulaireUnique()."<br>";

