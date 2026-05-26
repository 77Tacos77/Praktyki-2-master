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

            if ($variant->getProduct()->getId() != $product->getId()) {
                continue;
            }

            $products[] = [
                'product' => $product,
                'variant' => $variant,
                'quantity' => (int)$item['quantity']
            ];
        }

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
        // ✅ konwersja od razu na int
        $productId = (int)($_POST['product_id'] ?? 0);
        $variantId = (int)($_POST['variant_id'] ?? 0);

        if ($productId <= 0 || $variantId <= 0) {
            die("Nieprawidłowe dane");
        }

        $productRepository = $this->entityManager->getRepository(Product::class);
        $variantRepository = $this->entityManager->getRepository(VariantImage::class);

        $product = $productRepository->find($productId);
        $variant = $variantRepository->find($variantId);

        if (!$product || !$variant) {
            die("Błąd danych produktu");
        }

        if ($variant->getProduct()->getId() != $product->getId()) {
            die("Variant nie pasuje do produktu!");
        }

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // ✅ sprawdzamy czy już istnieje
        foreach ($_SESSION['cart'] as &$item) {
            if ((int)$item['product_id'] === $productId && (int)$item['variant_id'] === $variantId) {
                $item['quantity']++;
                header('Location: /Praktyki-2-master/?page=cart');
                exit;
            }
        }

        // ✅ dodanie nowego
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

    public function checkout()
    {
        $cart = $_SESSION['cart'] ?? [];

        if (empty($cart)) {
            header('Location: /Praktyki-2-master/?page=cart');
            exit;
        }

        $productRepository = $this->entityManager->getRepository(Product::class);
        $variantRepository = $this->entityManager->getRepository(VariantImage::class);
        $productVariantRepository = $this->entityManager->getRepository(ProductVariant::class);

        $total = 0;

        $order = new \src\Models\Order();
        $order->setUser($_SESSION['login'] ?? 'guest');
        $order->setCreatedAt(date('Y-m-d H:i:s'));

        // ✅ LICZENIE TOTALA
        foreach ($cart as $item) {

            $product = $productRepository->find((int)$item['product_id']);
            $variant = $variantRepository->find((int)$item['variant_id']);

            if (!$product || !$variant) continue;

            $productVariant = $productVariantRepository->findOneBy([
                'product' => $product
            ]);

            if (!$productVariant) continue;

            $price = (float)$productVariant->getPrice();
            $quantity = (int)$item['quantity'];

            $total += $price * $quantity;
        }

        $order->setTotal($total);

        $this->entityManager->persist($order);
        $this->entityManager->flush();

        // ✅ ORDER ITEMS
        foreach ($cart as $item) {

            $productId = (int)$item['product_id'];
            $variantId = (int)$item['variant_id'];

            if ($productId <= 0 || $variantId <= 0) continue;

            $product = $productRepository->find($productId);

            if (!$product) continue;

            $productVariant = $productVariantRepository->findOneBy([
                'product' => $product
            ]);

            if (!$productVariant) continue;

            $orderItem = new \src\Models\OrderItem();

            $orderItem->setProductId($productId);
            $orderItem->setVariantId($variantId);
            $orderItem->setQuantity((int)$item['quantity']);
            $orderItem->setPrice((float)$productVariant->getPrice());
            $orderItem->setOrderId((int)$order->getId());

            $this->entityManager->persist($orderItem);
        }

        $this->entityManager->flush();

        unset($_SESSION['cart']);

        $_SESSION['flash'] = [
            'type' => 'success',
            'message' => 'Zamówienie zostało złożone!'
        ];

        header('Location: /Praktyki-2-master/?page=cart');
        exit;
    }
}
