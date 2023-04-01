<?php
require_once './models/Articoli.php';
require_once './models/CategoriaAnimaleTipo.php';
require_once './models/Prodotto.php';



//  prodotto


// esempio cibo
$prodotto1Cibo = new Articolo('COD-1fdsfd56', 'Bau Bau', '20 euro', new CategoriaAnimaleTipo('cane'), 'cibo');
var_dump($prodotto1Cibo);

$prodotto2Cibo = new Articolo('COD-12f5436', 'felix', '30 euro', new CategoriaAnimaleTipo('gatto'), 'cibo');
var_dump($prodotto2Cibo);

// esempio giocattolo
$prodotto1Giocattolo = new Articolo('COD-12f5436', 'filo-attira-gatto', '5 euro', new CategoriaAnimaleTipo('gatto'), 'giocattolo');
var_dump($prodotto1Giocattolo);

$prodotto2Giocattolo = new Articolo('COD-12f5436', 'pallina-rimpalzante', '10 euro', new CategoriaAnimaleTipo('cane'), 'giocattolo');
var_dump($prodotto2Giocattolo);

// esempio cuccia
$prodotto1Cuccia = new Articolo('COD-1245ikd6', 'Cuccia per gatto', '25 euro', new CategoriaAnimaleTipo('gatto'), 'cuccia');
var_dump($prodotto1Cuccia);

$prodotto2Cuccia = new Articolo('COD-54309if', 'Cuccia per cane', '35 euro', new CategoriaAnimaleTipo('cane'), 'cuccia');
var_dump($prodotto2Cuccia);

// esempio ciotola
$prodotto1Ciotola = new Articolo('COD-1244hfdd6', 'Ciotola', '15 euro', new CategoriaAnimaleTipo('gatto'), 'ciotola');
var_dump($prodotto1Ciotola);

$prodotto2Ciotola = new Articolo('COD-1224fdd6', 'Ciotola', '20 euro', new CategoriaAnimaleTipo('cane'), 'ciotola');
var_dump($prodotto2Ciotola);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog</title>
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 300px;
            display: inline-block;
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .card h2 {
            font-size: 18px;
            margin: 10px 0;
        }
        .card p {
            font-size: 14px;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Product Catalog</h1>
    <div class="product-grid">
        <?php
            $products = [
                $prodotto1Cibo,
                $prodotto2Cibo,
                $prodotto1Giocattolo,
                $prodotto2Giocattolo,
                $prodotto1Cuccia,
                $prodotto2Cuccia,
                $prodotto1Ciotola,
                $prodotto2Ciotola
            ];
                
            

            foreach ($products as $product) {
                echo "<div class='card'>";
                // echo "<img src=''>";
                echo "<h2>" . $product->getNomeArticolo() . "</h2>";
                echo "<p><strong>Code:</strong> " . $product->getCodiceBarre() . "</p>";
                echo "<p><strong>Price:</strong> " . $product->getPrezzo() . "</p>";
                echo "<p><strong>Category:</strong> " . $product->getTipo() . "</p>";
                // echo "<p><strong>Animal Type:</strong> " . $product->getTipoAnimale() . "</p>";
                echo "</div>";
            };
            
            
        ?>
    </div>
</body>
</html>

