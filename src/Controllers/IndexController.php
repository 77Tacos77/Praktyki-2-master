<?php

namespace src\Controllers;

use src\Models\Product;

class IndexController extends FrontController
{
    public function index()
    {
        $products = $this->entityManager
            ->getRepository(Product::class)
            ->findAll();

        $this->smarty->assign('products', $products);

        $this->setTemplate('index.tpl');

        return $this->render();
    }
}
