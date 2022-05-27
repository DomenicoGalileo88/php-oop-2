<?php

require __DIR__ . '/Product.php';
require __DIR__ . '/User.php';
require __DIR__ . '/Accessory.php';

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
