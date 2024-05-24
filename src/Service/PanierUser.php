<?php

namespace App\Service;

class PanierUser
{
    public function createPanierDetails($paniers)
    {
        $panierDetails = [];

        foreach ($paniers as $panier) {
            $product = $panier->getIdproducts();
            $promo = $product->getCurrentPromo();

            if ($product) {
                $productPrice = $promo ? $promo->getPriceafterpromo() : $product->getPrice();
                $reduction = $promo ? $promo->getReduction() : null;
                $category = $product->getCategory();

                $panierDetails[] = $this->createPanierItemDetails($panier, $product, $productPrice, $reduction, $promo, $category); // Pass promo to createPanierItemDetails
            }
        }

        return $panierDetails;
    }

    public function createPanierItemDetails($panier, $product, $productPrice, $reduction, $promo = null, $category = null)
    {
        if ($product !== null) {
            return [
                'id' => $panier->getId(),
                'images' => $product->getImages(),
                'name' => $product->getName(),
                'price' => $productPrice,
                'category' => $category,
                'quantity' => $panier->getQuantity(),
                'description' => $product->getDescription(),
                'subtotal' => $productPrice * $panier->getQuantity(),
                'reduction' => $reduction,
                'promo' => $promo
            ];
        } else {
            return [
                'id' => $panier->getId(),
                'name' => 'Unknown Product or Promotion',
                'price' => $productPrice,
                'quantity' => $panier->getQuantity(),
                'description' => 'Unknown Description',
                'subtotal' => $productPrice * $panier->getQuantity(),
                'reduction' => $reduction,
                'promo' => $promo
            ];
        }
    }


    public function calculateTotalPrice($paniers): float
    {
        $totalPrice = 0;

        foreach ($paniers as $panier) {
            $product = $panier->getIdproducts();

            if ($product) {
                $promo = $product->getCurrentPromo();
                if ($promo) {
                    $productPrice = $promo->getPriceafterpromo();
                } else {
                    $productPrice = $product->getPrice();
                }
                $totalPrice += $productPrice * $panier->getQuantity();
            }
        }

        return $totalPrice;
    }
}
