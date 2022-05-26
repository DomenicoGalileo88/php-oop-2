<?php

class User
{
    public $nome;
    public $cognome;
    public $registrato;
    public $scadenza_carta;

    function __construct(String $nome, String $cognome, String $registrato, Int $scadenza_carta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->registrato = $registrato;
        $this->scadenza_carta = $scadenza_carta;
    }

    public function getSconto($registrato, $scadenza_carta)
    {
        if ($registrato == 'si' && $scadenza_carta > 2022) {
            return 'ha diritto ad uno sconto del 20%';
        } else{
            return 'non ha diritto a sconto';
        }
    }

}




