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
            'cart/checkout' => CartController::class,
'cart/payment' => CartController::class,
'cart/thankyou' => CartController::class,
            'products/addVariantImage' => AdminProductController::class,
            'home' => IndexController::class,
            'products/update' => AdminProductController::class,
            'products' => AdminProductController::class,
            'products/create' => AdminProductController::class,
            'products/store' => AdminProductController::class,
            'products/edit' => AdminProductController::class,
            'products/delete' => ProductDeleteController::class,
            'products-delete-multiple' => AdminProductController::class,
            'product/view' => AdminProductController::class,
            'cart' => CartController::class,
            'address-select' => AddressController::class,
            'address-create' => AddressController::class,
            'address-edit' => AddressController::class,
            'cart/checkout' => CartController::class,
            'address-delete' => AddressController::class,
            'addresses' => AddressController::class,
            'cart/add' => CartController::class,
            'profile' => ProfileController::class,
            'profile-edit' => ProfileEditController::class,
            'change-password' => ChangePasswordController::class,
            'address-select' => AddressController::class,
            'login' => LoginController::class,
            'logout' => LogoutController::class,
            'register' => RegisterController::class,
            'cart/delete' => CartController::class,
            
'cart/clear' => CartController::class,

            'user' => UserController::class,
            'cart/increase' => CartController::class,
            'cart/decrease' => CartController::class,

        ];

        if (!isset($routes[$page])) {
            return '<h1>404 Not Found</h1>';
        }

        $controllerClass = $routes[$page];
        $controller = new $controllerClass($this->entityManager);

        // HOME
        if ($page === 'address-select') return $controller->select();
        if ($page === 'home') return $controller->index();
        if ($page === 'cart/add') return $controller->add();
        // PRODUCTS
        if ($page === 'cart/checkout') return $controller->checkoutPage();
if ($page === 'cart/payment') return $controller->payment();
if ($page === 'cart/thankyou') return $controller->thankyou();
        if ($page === 'products') return $controller->index();
        if ($page === 'products/create') return $controller->create();
        if ($page === 'products/store') return $controller->store();
        if ($page === 'products/edit') return $controller->edit();
        if ($page === 'products/update') return $controller->update();
        if ($page === 'products/delete') return $controller->delete();
        if ($page === 'products-delete-multiple') return $controller->deleteMultiple();
        if ($page === 'products/addVariantImage') return $controller->addVariantImage();
        if ($page === 'cart') return $controller->index();        // ADDRESSES
        if ($page === 'address-select') return $controller->select();
        if ($page === 'address-create') return $controller->create();
        if ($page === 'address-edit') return $controller->edit();
        if ($page === 'cart/checkout') return $controller->checkout();
        if ($page === 'address-delete') return $controller->delete();
        if ($page === 'addresses') return $controller->index();
        if ($page === 'cart/delete') return $controller->delete();
        if ($page === 'cart/clear') return $controller->clear();
        // PROFILE
        if ($page === 'profile') return $controller->index();
        if ($page === 'profile-edit') return $controller->edit();
        if ($page === 'change-password') return $controller->index();

        // AUTH
        if ($page === 'login') return $controller->index();
        if ($page === 'register') return $controller->index();
        if ($page === 'logout') return $controller->logout();
        if ($page === 'cart/increase') return $controller->increase();
        if ($page === 'cart/decrease') return $controller->decrease();

        // USER
        if ($page === 'user') return $controller->index();
        if ($page === 'product/view') return $controller->view();
        return $controller->index();
    }
}
