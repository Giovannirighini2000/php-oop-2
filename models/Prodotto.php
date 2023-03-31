<?php

class Prodotto {
  protected $codiceBarre;
  protected $nomeArticolo;
  protected $prezzoProdotto;

  public function __construct($codiceBarre, $nomeArticolo, $prezzoProdotto) {
    $this->codiceBarre = $codiceBarre;
    $this->nomeArticolo = $nomeArticolo;
    $this->prezzoProdotto = $prezzoProdotto;
  }

  public function getCodice() {
    return $this->codiceBarre;
  }

  public function setCodice($codiceBarre) {
    $this->codiceBarre = $codiceBarre;
  }

  public function getNome() {
    return $this->nomeArticolo;
  }

  public function setNome($nomeArticolo) {
    $this->nomeArticolo = $nomeArticolo;
  }

  public function getPrezzo() {
    return $this->prezzoProdotto;
  }

  public function setPrezzo($prezzoProdotto) {
    $this->prezzoProdotto = $prezzoProdotto;
  }
}