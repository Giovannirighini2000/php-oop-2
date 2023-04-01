<?php
class Articolo  {
    protected $tipo;
  
    public function __construct( $tipo) {
        $this->setTipo($tipo);
    }
  
    public function getTpo() {
      return $this->tipo;
    }
  
    public function setTipo($tipo) {
        $valoriValidiCibo = array("cibo", "cuccia","ciotola","giocattolo","trasportino");
        if (!in_array($tipo, $valoriValidiCibo)) {
            $tipo = "non un prodotto presente nel nostro punto vendita , Riprova con altri prodotti";
        }
        $this->tipo = $tipo;
    }
}