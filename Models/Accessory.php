<?php

require __DIR__ . '/InStock.php';

class Accessory extends Product
{

    use InStock;

    public $available;

    function __construct ($tipo_animale, $quantita, $prezzo, $tipo_prodotto, $image, $available) {
        parent::__construct($tipo_animale, $quantita, $prezzo, $tipo_prodotto, $image);
            $this->available = $available;
    }

    public function setAvailable($available)
    {
        $this->available = $available;
        if ($available) {
            echo 'Si';
        } else{
            echo 'No';
        }
    }

}
