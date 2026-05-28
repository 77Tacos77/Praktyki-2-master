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

            $product = $productRepository->find((int)$item['product_id']);
            $variant = $variantRepository->find((int)$item['variant_id']);

            if (!$product || !$variant) continue;

            if ($variant->getProduct()->getId() != $product->getId()) continue;

            $products[] = [
                'product' => $product,
                'variant' => $variant,
                'quantity' => (int)$item['quantity']
            ];
        }

        // ✅ adres
        $userRepository = $this->entityManager->getRepository(User::class);

        $user = $userRepository->findOneBy([
            'login' => $_SESSION['login'] ?? null
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
        $productId = (int)($_POST['product_id'] ?? 0);
        $variantId = (int)($_POST['variant_id'] ?? 0);

        if ($productId <= 0 || $variantId <= 0) {
            header('Location: /Praktyki-2-master/');
            exit;
        }

        $productRepository = $this->entityManager->getRepository(Product::class);
        $variantRepository = $this->entityManager->getRepository(VariantImage::class);

        $product = $productRepository->find($productId);
        $variant = $variantRepository->find($variantId);

        if (!$product || !$variant) {
            header('Location: /Praktyki-2-master/');
            exit;
        }

        if ($variant->getProduct()->getId() != $product->getId()) {
            header('Location: /Praktyki-2-master/');
            exit;
        }

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        foreach ($_SESSION['cart'] as &$item) {
            if ($item['product_id'] == $productId && $item['variant_id'] == $variantId) {
                $item['quantity']++;
                header('Location: /Praktyki-2-master/?page=cart');
                exit;
            }
        }

        $_SESSION['cart'][] = [
            'product_id' => $productId,
            'variant_id' => $variantId,
            'quantity' => 1
        ];

        header('Location: /Praktyki-2-master/?page=cart');
        exit;
    }

    public function increase()
    {
        $index = $_GET['index'] ?? null;

        if (isset($_SESSION['cart'][$index])) {
            $_SESSION['cart'][$index]['quantity']++;
        }

        header('Location: /Praktyki-2-master/?page=cart');
        exit;
    }

    public function decrease()
    {
        $index = $_GET['index'] ?? null;

        if (isset($_SESSION['cart'][$index])) {

            $_SESSION['cart'][$index]['quantity']--;

            if ($_SESSION['cart'][$index]['quantity'] <= 0) {
                unset($_SESSION['cart'][$index]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
            }
        }

        header('Location: /Praktyki-2-master/?page=cart');
        exit;
    }

    public function clear()
    {
        unset($_SESSION['cart']);
        header('Location: /Praktyki-2-master/?page=cart');
        exit;
    }

    public function checkoutPage()
    {
        $cart = $_SESSION['cart'] ?? [];

        if (empty($cart)) {
            header('Location: /Praktyki-2-master/?page=cart');
            exit;
        }

        $products = [];

        $productRepository = $this->entityManager->getRepository(Product::class);
        $variantRepository = $this->entityManager->getRepository(VariantImage::class);

        foreach ($cart as $item) {
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

        // ✅ adres
        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->findOneBy([
            'login' => $_SESSION['login'] ?? null
        ]);

        $address = null;

        if ($user && isset($_SESSION['selected_address'])) {
            $addressRepository = $this->entityManager->getRepository(Address::class);
            $address = $addressRepository->find($_SESSION['selected_address']);
        }

        if (!$address) {
            header('Location: /Praktyki-2-master/?page=cart');
            exit;
        }

        $this->smarty->assign('products', $products);
        $this->smarty->assign('address', $address);

        $this->setTemplate('pages/checkout/index.tpl'); // ✅ dopasowane do Twojego folderu
        return $this->render();
    }

    public function payment()
    {
        $cart = $_SESSION['cart'] ?? [];

        if (empty($cart)) {
            header('Location: /Praktyki-2-master/?page=cart');
            exit;
        }

        $productRepository = $this->entityManager->getRepository(Product::class);
        $productVariantRepository = $this->entityManager->getRepository(ProductVariant::class);

        $order = new \src\Models\Order();
        $order->setUser($_SESSION['login'] ?? 'guest');
        $order->setCreatedAt(date('Y-m-d H:i:s'));

        // ✅ adres
        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->findOneBy([
            'login' => $_SESSION['login'] ?? null
        ]);

        if ($user && isset($_SESSION['selected_address'])) {
            $addressRepository = $this->entityManager->getRepository(Address::class);
            $address = $addressRepository->find($_SESSION['selected_address']);

            if ($address) {
                $order->setAddressId($address->getId());
            }
        }

        $total = 0;

        foreach ($cart as $item) {

            $product = $productRepository->find($item['product_id']);
            if (!$product) continue;

            $productVariant = $productVariantRepository->findOneBy([
                'product' => $product
            ]);

            if (!$productVariant) continue;

            $total += $productVariant->getPrice() * $item['quantity'];
        }

        $order->setTotal($total);

        $this->entityManager->persist($order);
        $this->entityManager->flush();

        unset($_SESSION['cart']);

        header('Location: /Praktyki-2-master/?page=cart/thankyou');
        exit;
    }

    public function thankyou()
    {
        $this->setTemplate('pages/cart/thankyou.tpl');
        return $this->render();
    }
}