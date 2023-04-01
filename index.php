<?php
require_once './models/Articoli.php';
require_once './models/CategoriaAnimaleTipo.php';
require_once './models/Prodotto.php';



//  prodotto


// esempio cibo
$prodotto1Cibo = new Articolo('COD-1fdsfd56', 'felix', '30 euro', new CategoriaAnimaleTipo('gatto'), 'cibo');
var_dump($prodotto1Cibo);

$prodotto2Cibo = new Articolo('COD-12f5436', 'Bau Bau', '20 euro', new CategoriaAnimaleTipo('cane'), 'cibo');
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

$categoriaGatto = new CategoriaAnimaleTipo('gatto');
$categoriaCane = new CategoriaAnimaleTipo('cane');


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
        .icona-size{
            width:25px
        }
    </style>
</head>
<body>
    <h1>Product Catalog</h1>
    <div class="product-grid">
        <?php
            $productsCat = [
                $prodotto1Cibo,
                
                $prodotto1Giocattolo,
                
                $prodotto1Cuccia,
                
                $prodotto1Ciotola,
                
            ];
            $productsDog = [
                
                $prodotto2Cibo,
                
                $prodotto2Giocattolo,
                
                $prodotto2Cuccia,
                
                $prodotto2Ciotola
            ];
                
            

            foreach ($productsCat as $product) {
                echo "<div class='card'>";
                echo "<img src='data:image/png;base64,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'>";
                echo "<h2>" . $product->getNomeArticolo() . "</h2>";
                echo "<p><strong>Code:</strong> " . $product->getCodiceBarre() . "</p>";
                echo "<p><strong>Price:</strong> " . $product->getPrezzo() . "</p>";
                echo "<p><strong>Category:</strong> " . $product->getTipo() . "</p>";
                echo "<div class='icona-size'><strong>Animal Type:</strong> " . $categoriaGatto->getIconaAnimale() . "</div>";
                echo "</div>";
            };
            // product getIconaAnimale() non sono riuscito cosi diviso
            
            foreach ($productsDog as $product) {
                echo "<div class='card'>";
                echo "<img src='data:image/png;base64,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'>";
                echo "<h2>" . $product->getNomeArticolo() . "</h2>";
                echo "<p><strong>Code:</strong> " . $product->getCodiceBarre() . "</p>";
                echo "<p><strong>Price:</strong> " . $product->getPrezzo() . "</p>";
                echo "<p><strong>Category:</strong> " . $product->getTipo() . "</p>";
                echo "<div class='icona-size'><strong>Animal Type:</strong> " . $categoriaCane->getIconaAnimale() . "</div>";
                echo "</div>";
            };

            // echo $categoriaGatto->getIconaAnimale();
            // echo $categoriaGatto2->getIconaAnimale();
             
        ?>
    </div>
</body>
</html>

