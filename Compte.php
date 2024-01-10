<h1>Organisation classe Compte</h1>

<?php
class Compte {
    private string $_libelle;
    private int $_soldeInitial;
    private string $_deviseMonetaire;
    private string $_titulaireUnique;
    private static $_nbComptes;

public function __construct($libelle,$soldeInitial,$deviseMonetaire,$titulaireUnique) {
    $this -> _libelle=$libelle;
    $this -> _soldeInitial=0;
    $this -> _deviseMonetaire=$_deviseMonetaire;
    $this -> _titulaireUnique=$_titulaireUnique;
    self::$_nbComptes++;
}

public function getLibelle () {
    return $this -> _libelle;
}
public function getSoldeInitial () {
    return $this -> _soldeInitial;
}
public function getDeviseMonetaire () {
    return $this -> _deviseMonetaire;
}
public function getTitulaireUnique () {
    return $this -> _titulaireUnique;
}
public function getInfos () {
    return $this ->_libelle." ".$this ->_soldeInitial." ".$this ->_deviseMonetaire." ".$this ->_titulaireUnique."<br>";
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
}

public function crediter($credit) {
    return $this -> _soldeInitial += $credit
}
public function debiter($debit) {
    return $this -> _soldeInitial -= $debit
}
//public function virer($virement) {
    return $this -> 
}
