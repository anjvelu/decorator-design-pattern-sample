<?php

namespace App;

class TShirt implements Sellable
{
    const PRICE = 30;

    public function getPrice() : int {
        return self::PRICE;
    }
}
