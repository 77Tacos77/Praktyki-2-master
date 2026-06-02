<?php

namespace src\Controllers;

use src\Models\Product;
use src\Models\VariantImage;

class IndexController extends FrontController
{
    public function index()
    {
        $products = $this->entityManager
            ->getRepository(Product::class)
            ->findAll();

        $this->smarty->assign('products', $products);

        $this->setTemplate('index.tpl');


        $products = $this->entityManager
            ->getRepository(Product::class)
            ->findAll();

        $variantImages = $this->entityManager
            ->getRepository(VariantImage::class)
            ->findAll();

        foreach ($products as $product) {

            $uniqueColors = [];

            foreach ($variantImages as $img) {
                $uniqueColors[] = $img->getColor();
            }

            // usuń duplikaty
            $uniqueColors = array_unique($uniqueColors);

            $this->smarty->assign('colors', $uniqueColors);

            $colors = [];

            foreach ($variantImages as $img) {
                if ($img->getProduct()->getId() === $product->getId()) {
                    $colors[] = $img->getColor();
                }
            }

            // 🔥 TO JEST KLUCZ
            $product->setColors($colors);
        }

        $this->smarty->assign('products', $products);

        return $this->render();
    }
}
