<?php
    trait Validator {
        /**
         * Funzione che controlla se il tipo di prodotto è valido e presente nell'array. 
         * Se il controllo fallisce, ritorna FALSE e ci presentare un errore con tipo di prodotto non valido e non esistente , se tutto va bene ritorna TRUE e ritroveremo le nostre card stampate 
         *  $prodotto1Cibo esempio se in questa instanza il valore in tipo fosse diverso da cibo o da gli altri prodotti presenti in vendita darebbe false quindi errore display a schermo
         * @param string $tipo
         * @return boolean $valore risultato
         */
        public function validateTipo($tipo) {
        // // crea array
            $valoriValidiProdotti = array("cibo", "cuccia", "ciotola", "giocattolo", "trasportino");
            // controlla se esiste il valore nell'array
            if (!in_array($tipo, $valoriValidiProdotti)) {
                throw new Exception("Tipo di prodotto non valido e non esistente ");
            }

            return true;
        }
    }