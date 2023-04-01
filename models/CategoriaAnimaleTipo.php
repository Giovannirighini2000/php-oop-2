<?php


class CategoriaAnimaleTipo {
  protected $tipoAnimale;
  protected $iconaAnimale;
  
  public function __construct($tipoAnimale) {
    $this->setTipoAnimale($tipoAnimale);
    
    if ($this->tipoAnimale === "gatto") {
      $this->iconaAnimale = "<img src='https://media.istockphoto.com/id/836622084/it/vettoriale/icona-forma-gatto.jpg?s=170667a&w=0&k=20&c=Lzo2GJeiaHhZTTqUWL7VT3_NbIwmitprwBM7tIm5QD8='>";
    } else if ($this->tipoAnimale === "cane") {
      $this->iconaAnimale = "<img src='https://cdn-icons-png.flaticon.com/512/91/91544.png'>";
    } else {
      $this->iconaAnimale = "";
    }
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
  
  public function getIconaAnimale() {
    return $this->iconaAnimale . " " . $this->tipoAnimale;
  }
}


