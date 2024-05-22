<?php

namespace App\Service;

use App\Repository\ProductsRepository;
use App\Repository\PromoRepository;
class ArticleFitler
{

    private $productsRepository;
    private $promoRepository;

    public function __construct(ProductsRepository $productsRepository, PromoRepository $promoRepository)
    {
        $this->productsRepository = $productsRepository;
        $this->promoRepository = $promoRepository;
    }

    public function getProductsAndPromotions()
    {
        $products = $this->productsRepository->findAll();
        $promotions = [];

        foreach ($products as $product) {
            $promo = $this->promoRepository->findOneBy(['idproduct' => $product->getId()]);
            if ($promo) {
                $promotions[] = $promo;
            }
        }

        return ['products' => $products, 'promotions' => $promotions];
    }

}
