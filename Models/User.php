<?php

class User
{
    public $nome;
    public $cognome;
    public $registrato;
    public $scadenza_carta;

    function __construct(String $nome, String $cognome, Bool $registrato, Int $scadenza_carta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->registrato = $registrato;
        $this->scadenza_carta = $scadenza_carta;
    }

    

}




