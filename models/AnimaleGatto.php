<?php
require_once __DIR__ . '/CategoriaAnimaleTipo.php';

class AnimaleGatto extends CategoriaAnimaleTipo {
  protected $razza;
  protected $altezza;
  protected $lunghezza;
  protected $colore;
  protected $peso;
  protected $eta;
  
  public function __construct($codiceBarre, $nomeArticolo, $prezzoProdotto, $tipoAnimale, $razza, $altezza, $lunghezza,$colore,$peso,$eta) {
    parent::__construct($codiceBarre, $nomeArticolo, $prezzoProdotto, $tipoAnimale);
    $this->razza = $razza;
    $this->altezza = $altezza;
    $this->lunghezza = $lunghezza;
    $this->colore = $colore;
    $this->peso = $peso;
    $this->eta = $eta;
  }
  
  public function getRazza() {
    return $this->razza;
  }
  
  public function setRazza($razza) {
    $this->razza = $razza;
  }
  
  public function getAltezza() {
    return $this->altezza;
  }
  
  public function setAltezza($altezza) {
    $this->altezza = $altezza;
  }
  
  public function getLunghezza() {
    return $this->lunghezza;
  }
  
  public function setLunghezza($lunghezza) {
    $this->lunghezza = $lunghezza;
  }
  public function getColore() {
    return $this->colore;
  }
  
  public function seColore($colore) {
    $this->colore = $colore;
  }
  public function getPeso() {
    return $this->peso;
  }
  
  public function setPeso($peso) {
    $this->peso = $peso;
  }
  public function getEta() {
    return $this->eta;
  }
  
  public function setEta($eta) {
    $this->eta = $eta;
  }
}