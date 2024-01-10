<h1>Organisation classe Livres</h1>

<?php

class Livre {
    private string $_titre;
    private int $_nbPages;
    private string $_anneeParution;
    private int $_prix;

public function __construct($titre,$anneeParution,$nbPages,$prix) {
    $this -> _titre=$titre;
    $this -> _nbPages=$nbPages;
    $this -> _anneeParution=$anneeParution;
    $this -> _prix=$prix;
}

public function getTitre () {
    return $this -> _titre;
}
public function getNbPages () {
    return $this -> _nbPages;
}
public function getAnneeParution () {
    return $this -> _anneeParution;
}
public function getPrix () {
    return $this -> _prix;
}
public function getInfos () {
    return $this -> _titre."  (".$this ->_anneeParution.") : ".$this -> _nbPages." pages / ".$this -> _prix." €";
}

public function setTitre (string $titre) {
    $this -> _titre= $titre;
}
public function setNbPages (int $nbPages) {
    $this -> _nbPages= $nbPages;
}
public function setAnneeParution (string $anneeParution) {
    $this -> _anneeParution= $anneeParution;
}
public function setPrix (int $prix) {
    $this -> _prix= $prix;
}}
