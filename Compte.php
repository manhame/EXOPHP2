<h1>Organisation classe Compte</h1>

<?php
class Compte {
    private string $_libelle;
    private int $_soldeInitial;
    private string $_deviseMonetaire;
    private int $_titulaireUnique;

public function __construct($libelle,$_soldeInitial,$_deviseMonetaire,$_titulaireUnique) {
    $this -> _libelle=$libelle;
    $this -> _soldeInitial=$_soldeInitial;
    $this -> _deviseMonetaire=$_deviseMonetaire;
    $this -> _titulaireUnique=$_titulaireUnique;
}

public function getLibelle () {
    return $this -> _libelle;
}
public function getSoldeInitial () {
    return $this -> _soleInitial;
}
public function getDeviseMonetaire () {
    return $this -> _deviseMonetaire;
}
public function getTitulaireUnique () {
    return $this -> _titulaireUnique;
}
public function getInfos () {
    return $this -> 
}

public function setLibelle (string $libelle) {
    $this -> _libelle= $libelle;
}
public function setSoldeInitial (int $soldeInitial) {
    $this -> _soldeInitial= $_soldeInitial;
}
public function setDeviseMonetaire (string $deviseMonetaire) {
    $this -> _deviseMonetaire= $deviseMonetaire;
}
public function setTitulaireUnique (string $titulaireUnique) {
    $this -> _titulaireUnique= $titulaireUnique;
}}