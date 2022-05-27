<?php

require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/User.php';
require __DIR__ . '/Models/Accessory.php';

$products = [
    new Accessory('cane', 2, 10, 'collare', 'https://picsum.photos/200/200', true),
    new Accessory('cane', 4, 30, 'cuccia', 'https://picsum.photos/200/200', false),
    new Accessory('cavallo', 1, 100, 'sella', 'https://picsum.photos/200/200', false),
    new Accessory('uccello', 1, 30, 'gabbia', 'https://picsum.photos/200/200', true),
];

$user = new User('Domenico', 'Galileo', true, 2025);

/* foreach ($products as $product) {
    echo $product->getFinalPrice($user, $product->prezzo);
    var_dump($product->getFinalPrice($user, $product->prezzo));
} */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>oop-2</title>
</head>

<body>

    <div class="container my-4">

    <h1 class="text-center mt-4">Pet Shop</h1>
        <div class="row row-cols-4 my-4">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $product->image ?>" alt="">
                        <div class="card-text text-center p-3">
                            <h4 class="my-2"><?php echo strtoupper($product->tipo_prodotto) ?></h4>
                            <div class="py-1"><?php echo ucfirst(strtolower($product->tipo_animale)) ?></div>
                            <div class="py-1">Quantità <?php echo $product->quantita ?></div>
                            <div class="py-1">Prezzo € <?php echo $product->getFinalPrice($user, $product->prezzo) ?></div>
                            <div class="py-1">
                                <?php
                                try {
                                    echo 'Stock: ' . $product->in_stock();
                                } catch (Exception $e) {
                                    echo "Stock: " . $e->getMessage();
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>