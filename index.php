<?php
require_once './models/Articoli.php';
require_once './models/CategoriaAnimaleTipo.php';
require_once './models/Prodotto.php';



//  prodotto


// esempio cibo
$prodotto1Cibo = new Articolo('COD-1fdsfd56', 'felix le ghiottonerie', '30 euro','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWdcQZTF6v6okYkWYnwnoeoSIdoxUXcIKGqQ&usqp=CAU', new CategoriaAnimaleTipo('gatto'), 'cibo');
// var_dump($prodotto1Cibo);

$prodotto2Cibo = new Articolo('COD-12f5436', 'Bao ', '20 euro','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI3IjHboAGtbsQ9y6rGboaRmAtGS3mC6hwyg&usqp=CAU', new CategoriaAnimaleTipo('cane'), 'cibo');
// var_dump($prodotto2Cibo);

// esempio giocattolo
$prodotto1Giocattolo = new Articolo('COD-12f5436', 'filo-attira-gatto', '5 euro','https://ae01.alicdn.com/kf/S0dfd26567e4d478b8292e85955192660O/Simulazione-uccello-interattivo-gatto-giocattolo-divertente-piuma-gatto-bastone-con-campana-gatto-che-gioca-Teaser-bacchetta.jpg_640x640.jpg', new CategoriaAnimaleTipo('gatto'), 'giocattolo');
// var_dump($prodotto1Giocattolo);

$prodotto2Giocattolo = new Articolo('COD-12f5436', 'pallina-rimbalzante', '10 euro','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTd0V7fc3gDQuHdpMmGsEdkkAlKNwhHTyIO-A&usqp=CAU', new CategoriaAnimaleTipo('cane'), 'giocattolo');
// var_dump($prodotto2Giocattolo);

// esempio cuccia
$prodotto1Cuccia = new Articolo('COD-1245ikd6', 'Cuccia ', '25 euro','https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/717089LX9LL._AC_UL400_.jpg', new CategoriaAnimaleTipo('gatto'), 'cuccia');
// var_dump($prodotto1Cuccia);

$prodotto2Cuccia = new Articolo('COD-54309if', 'Cuccia ', '35 euro','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlKMzMHhLDEe8oGxIXsQAI-nPlxW6sZDo9Tg&usqp=CAU', new CategoriaAnimaleTipo('cane'), 'cuccia');
// var_dump($prodotto2Cuccia);

// esempio ciotola
$prodotto1Ciotola = new Articolo('COD-1244hfdd6', 'Ciotola ', '15 euro','https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/71r1H-CyHeL._AC_UL400_.jpg', new CategoriaAnimaleTipo('gatto'), 'ciotola');
// var_dump($prodotto1Ciotola);

$prodotto2Ciotola = new Articolo('COD-1224fdd6', 'Ciotola', '20 euro','https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/61FccKEPIeL._AC_UL400_.jpg', new CategoriaAnimaleTipo('cane'), 'ciotola');
// var_dump($prodotto2Ciotola);

// $categoriaGatto = new CategoriaAnimaleTipo('gatto');
// $categoriaCane = new CategoriaAnimaleTipo('cane');


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
            width:25px;
        }
        .icona-prod{
            width:250px;
            height:250px;
            
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
        ?>
        <div class='card'>
            <div class='icona-prod'><img src='<?php echo $product->getImgProdotto(); ?>'></div>
            <h2><?php echo $product->getNomeArticolo(); ?></h2>
            <p><strong>Code:</strong> <?php echo $product->getCodiceBarre(); ?></p>
            <p><strong>Price:</strong> <?php echo $product->getPrezzo(); ?></p>
            <p><strong>Category:</strong> <?php echo $product->getTipo(); ?></p>
            <div class='icona-size'><strong>Animal Type:</strong> <?php echo $product->getCategoriaAnimaleTipo()->getIconaAnimale(); ?></div>
        </div>
        <?php
    }

    foreach ($productsDog as $product) {
        ?>
        <div class='card'>
            <div class='icona-prod'><img src='<?php echo $product->getImgProdotto(); ?>'></div>
            <h2><?php echo $product->getNomeArticolo(); ?></h2>
            <p><strong>Code:</strong> <?php echo $product->getCodiceBarre(); ?></p>
            <p><strong>Price:</strong> <?php echo $product->getPrezzo(); ?></p>
            <p><strong>Category:</strong> <?php echo $product->getTipo(); ?></p>
            <div class='icona-size'><strong>Animal Type:</strong> <?php echo $product->getCategoriaAnimaleTipo()->getIconaAnimale(); ?></div> 
        </div>
        <?php
    }
    
    ?>
</div>

</div>
    </div>
</body>
</html>

