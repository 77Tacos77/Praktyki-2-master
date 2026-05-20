<?php 
namespace src\Controllers;

use src\Models\Product;
use src\Models\ProductVariant;

class ProductDeleteController extends FrontController
{
    public function delete(): string
    {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $product = $this->entityManager->getRepository(Product::class)->find($id);

            if ($product) {
                $this->entityManager->remove($product);
                $this->entityManager->flush();
            }
        }

        header('Location: /Praktyki-2-master/products');
        exit;
    }
}