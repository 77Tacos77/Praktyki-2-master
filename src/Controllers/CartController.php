<?php

namespace src\Controllers;

use src\Models\Product;
use src\Models\User;
use src\Models\Address;
use src\Models\VariantImage;
use src\Models\ProductVariant;

class CartController extends FrontController
{
    public function index(): string
    {
        $cart = $_SESSION['cart'] ?? [];

        $products = [];

        $productRepository = $this->entityManager->getRepository(Product::class);
$variantRepository = $this->entityManager->getRepository(VariantImage::class);

        foreach ($cart as $item) {

            if (!is_array($item)) continue;
            if (!isset($item['product_id'], $item['variant_id'])) continue;

            $product = $productRepository->find($item['product_id']);
            $variant = $variantRepository->find($item['variant_id']);

            if ($product && $variant) {
                $products[] = [
                    'product' => $product,
                    'variant' => $variant,
                    'quantity' => $item['quantity']
                ];
            }
        }


        $userRepository = $this->entityManager->getRepository(User::class);

        $user = $userRepository->findOneBy([
            'login' => $_SESSION['login']
        ]);

        $address = null;

        if ($user && isset($_SESSION['selected_address'])) {
            $addressRepository = $this->entityManager->getRepository(Address::class);
            $address = $addressRepository->find($_SESSION['selected_address']);
        }

        $this->smarty->assign('address', $address);
        $this->smarty->assign('products', $products);

        $this->setTemplate('pages/cart/index.tpl');
        return $this->render();
    }

    public function add()
    {
        $productId = $_POST['product_id'] ?? null;
        $variantId = $_POST['variant_id'] ?? null;

        if (!$productId || !$variantId) {
            die("Brak danych produktu");
        }

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $_SESSION['cart'][] = [
            'product_id' => $productId,
            'variant_id' => $variantId,
            'quantity' => 1
        ];

        header('Location: /Praktyki-2-master/?page=cart');
        exit;
    }
    public function delete()
{
    $index = $_GET['index'] ?? null;

    if ($index !== null && isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }

    header('Location: /Praktyki-2-master/?page=cart');
    exit;
}
}
