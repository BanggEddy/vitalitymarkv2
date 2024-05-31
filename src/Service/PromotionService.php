<?php

namespace App\Service;

use App\Repository\PromoRepository;

class PromotionService
{
    private $promoRepository;

    public function __construct(PromoRepository $promoRepository)
    {
        $this->promoRepository = $promoRepository;
    }

    public function getPromotionsPourProducts(array $products): array
    {
        $promotions = [];

        foreach ($products as $product) {
            $promo = $this->promoRepository->findOneBy(['idproduct' => $product->getId()]);
            if ($promo) {
                $promotions[] = $promo;
            }
        }

        return $promotions;
    }
}
