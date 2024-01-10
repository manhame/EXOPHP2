<h1>Organisation classe Auteur</h1>

<?php

class Auteur {
    private string $_prenom;
    private string $_nom;

public function __construct($prenom, $nom) {
    $this -> _prenom= $prenom;
    $this -> _nom= $nom;
}

public function getPrenom() {
    return $this -> _prenom;
}
public function getNom() {
    return $this -> _nom;
}
public function setPrenom (string $prenom) {
    $this -> _prenom= $prenom;
}
public function setNom (string $nom) {
    $this -> _nom= $nom;
}

}
