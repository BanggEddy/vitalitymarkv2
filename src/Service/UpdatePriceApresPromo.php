<?php

namespace App\Service;

use App\Entity\Products;
use App\Service\PromoRecupDate;

class UpdatePriceApresPromo
{
    private PromoRecupDate $promoRecupDate;

    public function __construct(PromoRecupDate $promoRecupDate)
    {
        $this->promoRecupDate = $promoRecupDate;
    }

    public function updatePriceAfterPromo(Products $product): void
    {
        $promo = $this->promoRecupDate->getPromoMaintenant($product);
        if ($promo && $product->getPrice() !== null) {
            $reduction = (float) $promo->getReduction();
            $priceAfterPromo = $product->getPrice() - ($product->getPrice() * ($reduction / 100));
            $promo->setPriceafterpromo((string) $priceAfterPromo);
        }
    }
}
