<?php

trait InStock
{
    public function in_stock()
    {
        if ($this->available) {
            return $this->quantita;
        } else{
            throw new Exception('N.D.');
        }
    }

}
