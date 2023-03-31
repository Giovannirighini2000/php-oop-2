<?php
require_once __DIR__ .'/Prodotto.php';

class CategoriaAnimaleTipo extends Prodotto {
    protected $tipoAnimale;
  
    public function __construct($codiceBarre, $nomeArticolo, $prezzoProdotto, $tipoAnimale) {
      parent::__construct($codiceBarre, $nomeArticolo, $prezzoProdotto);
      $this->tipoAnimale = $tipoAnimale;
    }
  
    public function getTipoAnimale() {
      return $this->tipoAnimale;
    }
  
    public function setTipoAnimale($tipoAnimale) {
      $this->tipoAnimale = $tipoAnimale;
    }
  }