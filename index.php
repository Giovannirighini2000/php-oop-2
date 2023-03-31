<?php
require_once './models/Cibo.php';
require_once './models/Giocattolo.php';
require_once './models/Cuccia.php';
require_once './models/CategoriaAnimaleTipo.php';
require_once './models/Ciotola.php';
require_once './models/Prodotto.php';
require_once './models/Trasportino.php';



//  prodotto

 $prodotto1Cibo = new Prodotto('COD-1fdsfd56', 'Bau Bau', '10 euro',new CategoriaAnimaleTipo ('cane'),new Cibo ('secco'));
var_dump($prodotto1Cibo);
$prodotto2 = new Prodotto('COD-12f5436', 'felix',' 30 euro',new CategoriaAnimaleTipo ('gatto'),new Cibo ('morbido'));
var_dump($prodotto2Cibo);




?>