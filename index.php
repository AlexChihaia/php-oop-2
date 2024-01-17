<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Game.php';

//categories
$cani = new Category('Cani', '<i class="fa-solid fa-dog"></i>');
$gatti = new Category('Gatti', '<i class="fa-solid fa-cat"></i>');

//product default
$base_product = new Product(100, 'Cuccia', $gatti);

//food
$croccantini = new Food(12, 'Croccantini misti', $cani);
$croccantini->set_ingredients('Manzo, pollo');
$croccantini->set_image('https://cdn.pixabay.com/photo/2015/06/23/17/03/glance-818895_1280.jpg');

//game
$osso_giocattolo = new Game(178, 'Osso giocattolo', $cani);
$osso_giocattolo->set_material('Gomma');

//array di prodotti
$products = [
    $base_product,
    $croccantini,
    $osso_giocattolo,
];

var_dump($products);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /bootstrap -->
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- /font awesome -->
</head>

<body>
    <h1>Pet shop</h1>
    <div id="app">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) : ?>
                    <div class="col-4">
                        <div class="card" style="width: 24rem;">
                            <img src="<?php $product->get_image(); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->get_name(); ?></h5>
                                <p class="card-text">Category : <?php echo $product->get_category()->name; ?> <?php echo $product->get_category()->icon; ?></p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>



    <!-- vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- /vue js -->

    <!-- main js -->
    <script src="./src/main.js"></script>
    <!-- /main js -->
</body>

</html>