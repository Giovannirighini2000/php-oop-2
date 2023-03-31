<?php
require_once './models/AnimaleCane.php';
require_once './models/Cibo.php';
require_once './models/Giocattolo.php';
require_once './models/Cuccia.php';
require_once './models/CategoriaAnimaleTipo.php';
require_once './models/AnimaleGatto.php';
require_once './models/Ciotola.php';
require_once './models/Prodotto.php';
require_once './models/Trasportino.php';



// solo prodotto

// $prodotto = new Prodotto('COD-123456', 'Osso da gioco per animali', '10 euro');
// var_dump($prodotto);


// prodotto extends in categoria 
$categoriaAnimaleTipo = new CategoriaAnimaleTipo("COD-123456789", "Crocchette per cani",'10 euro', "Cani");
var_dump($categoriaAnimaleTipo);
















?>