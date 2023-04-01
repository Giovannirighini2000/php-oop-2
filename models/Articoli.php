<?php
require_once __DIR__ . '/Prodotto.php';

class Articolo extends Prodotto {
    protected $tipo;
  
    public function __construct($codiceBarre, $nomeArticolo, $prezzoProdotto,$imgProdotto,CategoriaAnimaleTipo $CategoriaAnimaleTipo, $tipo) {
        parent::__construct($codiceBarre, $nomeArticolo, $prezzoProdotto,$imgProdotto, $CategoriaAnimaleTipo);
        $this->setTipo($tipo);
    }
  
    public function getTipo() {
      return $this->tipo;
    }
  
    public function setTipo($tipo) {
        $valoriValidiCibo = array("cibo", "cuccia","ciotola","giocattolo","trasportino");
        if (!in_array($tipo, $valoriValidiCibo)) {
            $tipo = "non un prodotto presente nel nostro punto vendita, Riprova con altri prodotti";
        }
        $this->tipo = $tipo;
    }
}