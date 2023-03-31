<?php
require_once './models/Cibo.php';
require_once './models/Giocattolo.php';
require_once './models/Cuccia.php';
require_once './models/CategoriaAnimaleTipo.php';
require_once './models/Ciotola.php';
require_once './models/Prodotto.php';
require_once './models/Trasportino.php';



//  prodotto


//  esempio cibo

 $prodotto1Cibo = new Prodotto('COD-1fdsfd56', 'Bau Bau', '10 euro',new CategoriaAnimaleTipo ('cane'),new Cibo ('secco'),new Giocattolo ('non e un giocattolo','null'));
var_dump($prodotto1Cibo);

$prodotto2Cibo = new Prodotto('COD-12f5436', 'felix',' 30 euro',new CategoriaAnimaleTipo ('gatto'),new Cibo ('morbido'),new Giocattolo ('non e un giocattolo','null'));
var_dump($prodotto2Cibo);

// esempio giocattolo

$prodotto1Giocattolo = new Prodotto('COD-12f5436', 'felix',' 30 euro',new CategoriaAnimaleTipo ('gatto'),new Cibo ('non e cibo'),new Giocattolo ('8 anni','plastica'));
var_dump($prodotto1Giocattolo);


$prodotto2Giocattolo = new Prodotto('COD-12f5436', 'felix',' 30 euro',new CategoriaAnimaleTipo ('gatto'),new Cibo ('non e cibo'),new Giocattolo ('3 anni','plastica'));
var_dump($prodotto2Giocattolo);



?>