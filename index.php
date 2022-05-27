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
        <div class="row row-cols-4">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $product->image ?>" alt="">
                        <div class="card-text text-center">
                            <h4><?php echo $product->tipo_prodotto ?></h4>
                            <p><?php echo $product->tipo_animale ?></p>
                            <p>quantità <?php echo $product->quantita ?></p>
                            <p>prezzo € <?php echo $product->getFinalPrice($user, $product->prezzo) ?></p>
                            <p>disponibile <?php echo $product->setAvailable($product->available) ?></p>
                            <p>disponibile <?php echo $product->in_stock($product->available, $product->quantita) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>