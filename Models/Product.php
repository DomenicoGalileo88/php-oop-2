<?php

class Product
{
    public $tipo_animale;
    public $quantita;
    public $prezzo;
    public $tipo_prodotto;
    public $image;

    function __construct(String $tipo_animale, Int $quantita, Int $prezzo, String $tipo_prodotto, String $image)
    {
        $this->tipo_animale = $tipo_animale;
        $this->quantita = $quantita;
        $this->prezzo = $prezzo;
        $this->tipo_prodotto = $tipo_prodotto;
        $this->image = $image;
    }

    public function getFinalPrice(User $user, Int $prezzo)
    {
        if ($user->registrato == true && $user->scadenza_carta > 2022) {
            return $this->prezzo - ($this->prezzo * 20 / 100);
        } else {
            return $prezzo;
        }
    }
}

