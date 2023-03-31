<?php
class Cibo  {
    protected $tipo;
  
    public function __construct( $tipo) {
        $this->setTipo($tipo);
    }
  
    public function getTpo() {
      return $this->tipo;
    }
  
    public function setTipo($tipo) {
        $valoriValidiCibo = array("secco", "morbido");
        if (!in_array($tipo, $valoriValidiCibo)) {
            $tipo = "non un prodotto alimentare , non esiste fra i valori definiti secco morbido";
        }
        $this->tipo = $tipo;
    }
}