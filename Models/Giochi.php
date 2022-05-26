<?php

class Giochi extends Product
{
    public $nome_gioco;
    function __construct(String $tipo_animale, Int $quantita, Int $prezzo, String $nome_gioco)
    {
        parent::__construct($tipo_animale, $quantita, $prezzo);

        $this->nome_gioco = $nome_gioco;
        
    }

}
