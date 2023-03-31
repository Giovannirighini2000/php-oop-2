<?php
class Giocattolo {
    protected $durata;
    protected $materiale;
    
    public function __construct($durata, $materiale) {
      $this->durata = $durata;
      $this->materiale = $materiale;
    }
    
    public function getDurata() {
      return $this->durata;
    }
    
    public function setDurata($durata) {
      $this->durata = $durata;
    }
    
    public function getMateriale() {
      return $this->materiale;
    }
    
    public function setMateriale($materiale) {
      $this->materiale = $materiale;
    }
  }