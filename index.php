<?php
require_once './models/Cibo.php';
require_once './models/Giocattolo.php';
require_once './models/Cuccia.php';
require_once './models/CategoriaAnimaleTipo.php';
require_once './models/Ciotola.php';
require_once './models/Prodotto.php';
require_once './models/Trasportino.php';



//  prodotto

 $prodotto1 = new Prodotto('COD-123456', 'Osso da gioco per animali', '10 euro',new CategoriaAnimaleTipo ('gatto'));
var_dump($prodotto1);
$prodotto2 = new Prodotto('COD-123456', 'Osso da gioco per animali', '10 euro',new CategoriaAnimaleTipo ('cane'));
var_dump($prodotto2);




?>