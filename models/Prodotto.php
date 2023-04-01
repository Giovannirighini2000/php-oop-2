<?php
include_once __DIR__ .'/CategoriaAnimaleTipo.php';


class Prodotto {
  protected $codiceBarre;
  protected $nomeArticolo;
  protected $prezzoProdotto;
  protected $CategoriaAnimaleTipo;

  public function __construct($codiceBarre, $nomeArticolo, $prezzoProdotto,CategoriaAnimaleTipo $CategoriaAnimaleTipo) {
    $this->codiceBarre = $codiceBarre;
    $this->nomeArticolo = $nomeArticolo;
    $this->prezzoProdotto = $prezzoProdotto;
    $this->CategoriaAnimaleTipo = $CategoriaAnimaleTipo;
    
  }

  public function getCodiceBarre() {
    return $this->codiceBarre;
  }

  public function setCodiceBarre($codiceBarre) {
    $this->codiceBarre = $codiceBarre;
  }

  public function getNomeArticolo() {
    return $this->nomeArticolo;
  }

  public function setNomeArticolo($nomeArticolo) {
    $this->nomeArticolo = $nomeArticolo;
  }

  public function getPrezzo() {
    return $this->prezzoProdotto;
  }

  public function setPrezzo($prezzoProdotto) {
    $this->prezzoProdotto = $prezzoProdotto;
  }
}