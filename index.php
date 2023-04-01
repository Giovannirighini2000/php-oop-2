<?php
require_once './models/Articoli.php';
require_once './models/CategoriaAnimaleTipo.php';
require_once './models/Prodotto.php';



//  prodotto


//  esempio cibo

 $prodotto1Cibo = new Prodotto('COD-1fdsfd56', 'Bau Bau', '10 euro',new CategoriaAnimaleTipo ('cane'),new Articolo ('cibo'));
var_dump($prodotto1Cibo);

$prodotto2Cibo = new Prodotto('COD-12f5436', 'felix',' 30 euro',new CategoriaAnimaleTipo ('gatto'),new Articolo ('cibo'));
var_dump($prodotto2Cibo);

// esempio giocattolo

$prodotto1Giocattolo = new Prodotto('COD-12f5436', 'filo-attira-gatto',' 5 euro',new CategoriaAnimaleTipo ('gatto'),new Articolo ('giocattolo'));
var_dump($prodotto1Giocattolo);


$prodotto2Giocattolo = new Prodotto('COD-12f5436', 'pallina-rimpalzante',' 10 euro',new CategoriaAnimaleTipo ('cane'),new Articolo ('giocattolo'));
var_dump($prodotto2Giocattolo);



?>