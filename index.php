<?php

require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/User.php';
require __DIR__ . '/Models/Giochi.php';
require __DIR__ . '/Models/Accessori.php';

$alessio = new User('Alessio', 'Loria', 'si', 2025);
//var_dump($alessio);

$osso_gomma = new Giochi('cane', 5, 10, 'osso di gomma');

$collare = new Accessori('cane', 3, 15, 'collare');

var_dump($alessio->nome . ' ' . $alessio->cognome . ' ' . $alessio->getSconto($alessio->registrato, $alessio->scadenza_carta));

var_dump($alessio->nome . ' ' . $alessio->cognome . ' vuole acquistare ' . $osso_gomma->nome_gioco . ' e ' . $collare->nome_accessorio);


