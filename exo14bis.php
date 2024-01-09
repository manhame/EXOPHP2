<h1>Exercice 14</h1>

<p>Héritage objets</p>

<?php

class Voiture {
  protected string $_marque;
  protected string $_modele;

    public function __construct (string $marque, string $modele){
        $this -> _marque = $marque;
        $this -> _modele = $modele;
    }

    public function getMarque() {
        return $this -> _marque;
    }
    public function getModele() {
        return $this -> _modele;
    }

    public function setMarque (string $marque) {
        $this -> _marque = $marque;
    }
    
    public function setModele (string $modele) {
        $this -> _modele = $modele;
    }

    public function getInfos() {
        return $this->_marque." ".$this->_modele;
    }
}

class VoitureElec extends Voiture {
    private $_autonomie;

    public function __construct (string $marque, string $modele, int $autonomie) {
        parent ::__construct ($marque, $modele);
        $this -> _autonomie = $autonomie;
    }
              
    public function getAutonomie(){
        return $this -> _autonomie;
    }

    public function setAutonomie(int $autonomie) {
        $this -> _autonomie= $autonomie;        
    }

    public function getInfos() {
        // return $this->_marque." ".$this->_modele." / autonomie : $this->_autonomie km";
        return parent::getInfos()." / autonomie : $this->_autonomie km";
    }
}
$v1 = new Voiture ("Peugeot","408");
$ve1 = new VoitureElec ("BMW","i3",150);

echo $v1 -> getMarque()." ";
echo $v1 -> getModele()."<br>";
echo $ve1 -> getMarque()." ";
echo $ve1 -> getModele()." ";
echo $ve1 -> getAutonomie();

echo $v1->getInfos();
echo $ve1->getInfos();
