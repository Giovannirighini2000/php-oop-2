<?php
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/../traits/trait.php';


class Articolo extends Prodotto {
  // riporto uso del trait di validaTipo
    use Validator;

    protected $tipo;

    public function __construct($codiceBarre, $nomeArticolo, $prezzoProdotto, $imgProdotto, CategoriaAnimaleTipo $CategoriaAnimaleTipo, $tipo) {
        parent::__construct($codiceBarre, $nomeArticolo, $prezzoProdotto, $imgProdotto, $CategoriaAnimaleTipo);
        $this->setTipo($tipo);
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->validateTipo($tipo);
        $this->tipo = $tipo;
    }

    public function getCategoriaAnimaleTipo() {
        return $this->CategoriaAnimaleTipo;
    }

    public function setIconaAnimale($CategoriaAnimaleTipo) {
        $this->CategoriaAnimaleTipo = $CategoriaAnimaleTipo;
    }
}
