<?php

namespace App;

class Discount extends TShirtDecorator
{
    const EXTRA_PRICE = 20;
    
    public function getPrice() : int {
        return $this->sellable->getPrice() - self::EXTRA_PRICE;
    }
}
