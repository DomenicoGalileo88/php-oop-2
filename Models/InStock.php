<?php

trait InStock
{
    public function in_stock(Accessory $accessory, Product $product)
    {
        if ($accessory->available) {
            echo $product->quantita;
        } else{
            echo 'Non disponibile';
        }
    }

}
