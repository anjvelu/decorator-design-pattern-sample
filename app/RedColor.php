<?php

namespace App;

class RedColor extends TShirtDecorator
{
    const EXTRA_PRICE = 10;
    
    public function getPrice() : int {
        return $this->sellable->getPrice() + self::EXTRA_PRICE;
    }
}
