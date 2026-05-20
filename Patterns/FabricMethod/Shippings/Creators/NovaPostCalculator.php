<?php

namespace Patterns\FabricMethod\Shippings\Creators;

use Patterns\FabricMethod\Contracts\Shipping;
use Patterns\FabricMethod\Shippings\NovaPost;
use Patterns\FabricMethod\Shippings\Creators\ShippingCalculator;

class NovaPostCalculator extends ShippingCalculator
{

    protected function getShipping(): Shipping
    {
        return new NovaPost($this->weight, $this->totalPrice);
    }
}