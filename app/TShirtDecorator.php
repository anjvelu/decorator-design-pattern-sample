<?php

namespace App;

abstract class TShirtDecorator implements Sellable
{
    public function __construct(public Sellable $sellable) {}

    public function getPrice() : int {
        return $this->sellable->getPrice();
    }
}
