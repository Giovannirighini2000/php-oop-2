<?php


class Prodotto {
  protected $codiceBarre;
  protected $nomeArticolo;
  protected $prezzoProdotto;
  protected $CategoriaAnimaleTipo;
  protected $Cibo;

  public function __construct($codiceBarre, $nomeArticolo, $prezzoProdotto,CategoriaAnimaleTipo $CategoriaAnimaleTipo,Cibo $Cibo ) {
    $this->codiceBarre = $codiceBarre;
    $this->nomeArticolo = $nomeArticolo;
    $this->prezzoProdotto = $prezzoProdotto;
    $this->CategoriaAnimaleTipo = $CategoriaAnimaleTipo;
    $this->Cibo = $Cibo;
  }

  public function getCodiceBarre() {
    return $this->codiceBarre;
  }

  public function setCodiceBarre($codiceBarre) {
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