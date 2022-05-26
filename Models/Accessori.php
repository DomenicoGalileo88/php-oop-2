<?php

class Accessori extends Product
{
    public $nome_accessorio;
    function __construct(String $tipo_animale, Int $quantita, Int $prezzo, String $nome_accessorio)
    {
        parent::__construct($tipo_animale, $quantita, $prezzo);

        $this->nome_accessorio = $nome_accessorio;
    }
}
