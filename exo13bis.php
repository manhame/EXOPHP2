
<p> exercice 13 Classe de VOITURES</p>


<?php
  
Class Voiture {

    // attributs de la classe
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_etat;

    // constructeur
    public function __construct($marque,$modele,$nbPortes) { //pas besoin d'ajouter $vitesseActuelle ni $etat car une valeur affectée dessous
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_etat = false;
    }
        
    // autres méthodes
    public function demarrer(){
        $this->_etat = true;
        echo "La voiture démarre<br>";
    }
    public function stopper(){
        $this->_etat = false;
        echo "La voiture s'arrête<br>";
    }
    public function accelerer($acceleration){
        if($this->_etat) {
            $this->_vitesseActuelle += $acceleration;    //+= pour cumuler les vitesses
            echo "La voiture accélère de $acceleration km/h<br>";
        } else {
            echo "Pour pouvoir accélérer il faudrait peut être déjà mettre le contact :)<br>";
        }
    }
    
    public function ralentir($deceleration) {
        if($this->_etat && $this->_vitesseActuelle >= $deceleration) {
             $this->_vitesseActuelle -= $deceleration; // -= pour cumuler les soustractions
             echo "La voiture ralentit de $deceleration km/h<br>";
    }   else {
            echo "Requête incohérente :)<br>";
}}

    // getters (accesseurs)
    public function getMarque() {
        return $this->_marque;
    }
    public function getModele() {
        return $this->_modele;
    }
    public function getNbPortes() {
        return $this ->_nbPortes;
    }
    public function getVitesseActuelle() {
        return $this ->_vitesseActuelle;
    }

    // setters (mutateurs)
    public function setMarque(string $marque) {
        $this->_marque = $marque;
    }
    public function setModele(string $modele) {
        $this->_modele = $modele;
    }
    public function setNbPortes(int $nbPortes) {
        $this->_nbPortes = $nbPortes;
    }
    public function setVitesseActuelle(int $vitesseActuelle) {
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    public function getEtat()
    {
        $etatTexte = "à l'arrêt";
        if($this->_etat) { // si l'état est vrai (true) et !$this si l'état esdt faux
            $etatTexte = "démarré";
        }
        return $etatTexte;
    }
}


// instancier 2 véhicules - afficher messages exercice
$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroen","C4",3);

$v1 ->demarrer();
$v1 ->accelerer(50);
$v1 ->ralentir(80);

// $v2 ->demarrer();

echo "Infos véhicule 1<br>";
echo $v1->getMarque()." ".$v1->getModele()."<br>";
echo "Nombre de portes :" .$v1->getNbPortes(). "<br>";
echo $v1->getVitesseActuelle()." km/h<br>";
echo "Etat : ".$v1 ->getEtat()."<br>";

echo "Infos véhicule 2<br>";
echo $v2->getMarque()." ".$v2->getModele()."<br>";
echo "Nombre de portes :" .$v2->getNbPortes()."<br>";
echo $v2->getVitesseActuelle()." km/h<br>";
echo "Etat : ".$v2 ->getEtat()."<br>";


// $v1->accelerer(10);
// echo $v1->getVitesseActuelle()."<br>";
// $v1->accelerer(50);
// echo $v1->getVitesseActuelle()."<br>";

$v1 ->stopper();