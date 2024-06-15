<?php

namespace App\Service;

use App\Entity\Products;
use App\Entity\Promo;

class PromoRecupDate
{
    public function getPromoMaintenant(Products $product): ?Promo
    {
        foreach ($product->getPromos() as $promo) {
            if ($promo->isCurrent()) {
                return $promo;
            }
        }
        return null;
    }
}
