<?php

namespace src;


use src\Controllers\IndexController;
use src\Controllers\LoginController;
use src\Controllers\AdminProductController;
use src\Controllers\LogoutController;
use src\Controllers\RegisterController;
use src\Controllers\UserController;
use src\Controllers\AddressController;
use src\Controllers\ProfileEditController;
use src\Controllers\ProfileController;
use src\Controllers\ChangePasswordController;
use Doctrine\ORM\EntityManager;
use src\Controllers\ProductDeleteController;
use src\Controllers\CartController;


class App
{
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function render(): string
    {
        $page = $_GET['page'] ?? 'home';

        $routes = [
            // HOME
            'home' => IndexController::class,

            // PRODUCTS
            'products' => AdminProductController::class,
            'products/create' => AdminProductController::class,
            'products/store' => AdminProductController::class,
            'products/edit' => AdminProductController::class,
            'products/update' => AdminProductController::class,
            'products/remove' => CartController::class,
            'products-delete-multiple' => AdminProductController::class,
            'products/addVariantImage' => AdminProductController::class,
            'product/view' => AdminProductController::class,

            // CART
            'cart' => CartController::class,
            'cart/add' => CartController::class,
            'cart/delete' => CartController::class,
            'cart/clear' => CartController::class,
            'cart/increase' => CartController::class,
            'cart/decrease' => CartController::class,
            'cart/checkout' => CartController::class,
            'cart/payment' => CartController::class,
            'cart/thankyou' => CartController::class,

            // ADDRESS
            'addresses' => AddressController::class,
            'address-create' => AddressController::class,
            'address-edit' => AddressController::class,
            'address-delete' => AddressController::class,
            'address-select' => AddressController::class,

            // PROFILE
            'profile' => ProfileController::class,
            'profile-edit' => ProfileEditController::class,
            'change-password' => ChangePasswordController::class,

            // AUTH
            'login' => LoginController::class,
            'register' => RegisterController::class,
            'logout' => LogoutController::class,

            // USER
            'user' => UserController::class,
        ];

        if (!isset($routes[$page])) {
            return '<h1>404 Not Found</h1>';
        }

        $controllerClass = $routes[$page];
        $controller = new $controllerClass($this->entityManager);

        // --- CART ---
        if ($page === 'cart') return $controller->index();
        if ($page === 'cart/add') return $controller->add();
        if ($page === 'cart/delete') return $controller->delete();
        if ($page === 'cart/clear') return $controller->clear();
        if ($page === 'cart/increase') return $controller->increase();
        if ($page === 'cart/decrease') return $controller->decrease();
        if ($page === 'cart/checkout') return $controller->checkoutPage();
        if ($page === 'cart/payment') return $controller->payment();
        if ($page === 'cart/thankyou') return $controller->thankyou();

        // --- PRODUCTS ---
        if ($page === 'products') return $controller->index();
        if ($page === 'products/create') return $controller->create();
        if ($page === 'products/store') return $controller->store();
        if ($page === 'products/edit') return $controller->edit();
        if ($page === 'products/update') return $controller->update();
        if ($page === 'products/remove') return $controller->delete();
        if ($page === 'products-delete-multiple') return $controller->deleteMultiple();
        if ($page === 'products/addVariantImage') return $controller->addVariantImage();
        if ($page === 'product/view') return $controller->view();

        // --- ADDRESS ---
        if ($page === 'addresses') return $controller->index();
        if ($page === 'address-create') return $controller->create();
        if ($page === 'address-edit') return $controller->edit();
        if ($page === 'address-delete') return $controller->delete();
        if ($page === 'address-select') return $controller->select();

        // --- PROFILE ---
        if ($page === 'profile') return $controller->index();
        if ($page === 'profile-edit') return $controller->edit();
        if ($page === 'change-password') return $controller->index();

        // --- AUTH ---
        if ($page === 'login') return $controller->index();
        if ($page === 'register') return $controller->index();
        if ($page === 'logout') return $controller->logout();

        // --- HOME ---
        if ($page === 'home') return $controller->index();

        return $controller->index();
    }
}
