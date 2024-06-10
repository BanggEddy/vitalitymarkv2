<?php

namespace App\Service;

use App\Entity\Panier;

class PanierUser
{
    public function creerDetailsPanier(Panier $panier)
    {
        $panierDetails = [];
        $panierItems = $panier->getPanierItems();

        foreach ($panierItems as $item) {
            $product = $item->getIdproduct();
            $promo = $product ? $product->getPromoMaintenant() : null;

            if ($product) {
                $productPrice = $promo ? $promo->getPriceafterpromo() : $product->getPrice();
                $reduction = $promo ? $promo->getReduction() : null;
                $category = $product->getCategory();

                $panierDetails[] = $this->createPanierItemDetails($item, $product, $productPrice, $reduction, $promo, $category);
            }
        }

        return $panierDetails;
    }

    public function createPanierItemDetails($panierItem, $product, $productPrice, $reduction, $promo = null, $category = null)
    {
        if ($product !== null) {
            return [
                'id' => $panierItem->getId(),
                'images' => $product->getImages(),
                'name' => $product->getName(),
                'price' => $productPrice,
                'category' => $category,
                'quantity' => $panierItem->getQuantity(),
                'description' => $product->getDescription(),
                'subtotal' => $productPrice * $panierItem->getQuantity(),
                'reduction' => $reduction,
                'promo' => $promo
            ];
        } else {
            return [
                'id' => $panierItem->getId(),
                'name' => 'pas Product or Promotion',
                'price' => $productPrice,
                'quantity' => $panierItem->getQuantity(),
                'description' => 'pas Description',
                'subtotal' => $productPrice * $panierItem->getQuantity(),
                'reduction' => $reduction,
                'promo' => $promo
            ];
        }
    }

    public function PriceTotalPanier(Panier $panier): float
    {
        $total = 0;
        $panierItems = $panier->getPanierItems();

        foreach ($panierItems as $item) {
            $product = $item->getIdproduct();
            $promo = $product ? $product->getPromoMaintenant() : null;
            $productPrice = $promo ? $promo->getPriceafterpromo() : $product->getPrice();
            $total += $productPrice * $item->getQuantity();
        }

        return $total;
    }
}
