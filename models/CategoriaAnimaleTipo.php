<?php


class CategoriaAnimaleTipo {
  protected $tipoAnimale;
  // DA INSERIRE ICONA/IMG CON CONTROLLO IF IN BASE CANE E GATTO
  
  public function __construct($tipoAnimale) {
    $this->setTipoAnimale($tipoAnimale);
  }
  
  public function getTipoAnimale() {
    return $this->tipoAnimale;
  }
  
  public function setTipoAnimale($tipoAnimale) {
    $valoriValidi = array("gatto", "cane");
    if (!in_array($tipoAnimale, $valoriValidi)) {
      $tipoAnimale = "non definito";
    }
    $this->tipoAnimale = $tipoAnimale;
  }
}

