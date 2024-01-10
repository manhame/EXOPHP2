<h1>Exercice 14</h1>

<p>Héritage objets</p>

<?php

class Voiture {
  private string $_marque;
  private string $_modele;

  public function __construct ($marque,$modele){
    $this -> _marque = $marque;
    $this -> _modele = $modele;
  }


    public function getMarque () {
        return $this -> _marque;
    }
    public function getModele () {
        return $this -> _modele;
    }
    public function setMarque (string $marque) {
        $this -> _marque = $marque;
    }
    public function setModele (string $modele) {
        $this -> _modele = $modele;
    }
}

class VoitureElec extends Voiture {
    private int $_autonomie;

    public function __construct ($data,$autonomie) {
        parent ::__construct ($data);
        $this -> _autonomie = $autonomie;
    }
}
$v1 = new Voiture (array("marque"=>"Peugeot","modele"=>"408"));
$ve1 = new VoitureElec (array("marque" =>"BMW","modele" => "i3"),150);

echo $v1 -> getData ($data);
echo $ve1 - getData ($data,"autonomie");
