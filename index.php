<?php 
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Toys.php';

$dogsCategory = new Category('Cane', 'https://www.ilmeglioperglianimali.it/wp-content/uploads/2023/11/icona-cani.png.webp', 'Categoria prodotti per cani');
$catsCategory = new Category('Gatto', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2ZlVJx4V9NUuxT4fWY1SVShP8UdFy7jfP1Q&usqp=CAU', 'Categoria prodotti per gatti');

$trixieToy = new Toys ('Gioco strategico solitario', 'https://www.epocaitalpigeon.com/8338/trixie-gioco-strategico-solitario-per-cani-livello-1.jpg', 'Un bellissimo gioco di strategia che farà sviluppare un\'intelligenza fuori dal comune al tuo amico domestico', 'Trixie', $dogsCategory, 'Gioco', 4.99, 'Gomma', '29 cm');
$milk = new Food('Milkies Cat Snack', 'https://shop-cdn-m.mediazs.com/bilder/6/400/66014_pla_megapack_animonda_milkies_mix1_20x15g_hs_01_6.jpg', 'Questo latte farà crescere il tuo piccolo gattino sano e forte, lo renderà pieno di energia obbligandoti a farlo correre per 2h almeno una volta al giorno!', 'Animonda', $catsCategory, 'Cibo per gatti', 8.49, 30.6, 60.2, 20.3);
$woodKennel = new Kennel('Cuccia con veranda', 'https://www.original-legno.com/wp-content/uploads/2021/06/Cucce_in_legno_italy_con_veranda_per_cani_in_4_misure-1.webp', 'Questa rivoluzionari cuccia permetterà al tuo amico a quattro zampe di ripararsi nelle giornate piovose senza però sentire la tua mancanza sfruttando la rivoluzionaria veranda!', 'Original Legno Italia', $dogsCategory, 'Cuccia per cani', 276.00, 'Legno', 'XL');

$products = [$trixieToy, $milk, $woodKennel];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- LINK BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <?php foreach ($products as $product) {?>
                    <div class="card col-3 me-4" style="width: 18rem;">
                        <img src="<?php echo $product->imageUrl?>" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $product->name ?></h4>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product->category->name ?></h6>
                            <p class="card-text"><?php echo $product->description ?></p>
                            <a href="#" class="btn btn-primary">Puoi acquistarlo comodamente sulla tua poltrona a soli: <br> <?php echo $product->price?> </a>
                            <img src="<?php echo $product->category->iconUrl?>" class="card-img-bot" style="width: 30%;">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>