<?php

namespace App\Service;

use App\Entity\Products;

class PromoFilter
{
    public function filter(array $products, array $promotions): array
    {
        return array_filter($products, function (Products $product) use ($promotions) {
            foreach ($promotions as $promo) {
                $idProduct = $promo->getIdproduct();
                if ($idProduct !== null && $idProduct->getId() === $product->getId()) {
                    if ($product->getQuantity() === 0) {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
            return true;
        });
    }
}
