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
use src\Models\Product;

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
            'home' => IndexController::class,

            'products' => AdminProductController::class,
            'products/create' => AdminProductController::class,
            'products/store' => AdminProductController::class,
            'products/edit' => AdminProductController::class,
            'products/delete' => ProductDeleteController::class,

            'address-select' => AddressController::class,
            'address-create' => AddressController::class,
            'address-edit' => AddressController::class,
            'address-delete' => AddressController::class,
            'addresses' => AddressController::class,

            'profile' => ProfileController::class,
            'profile-edit' => ProfileEditController::class,
            'change-password' => ChangePasswordController::class,

            'login' => LoginController::class,
            'logout' => LogoutController::class,
            'register' => RegisterController::class,

            'user' => UserController::class,
        ];

        if (!isset($routes[$page])) {
            return '<h1>404 Not Found</h1>';
        }

        $controllerClass = $routes[$page];
        $controller = new $controllerClass($this->entityManager);

        if ($page === 'home') return $controller->index();

        if ($page === 'products') return $controller->index();
        if ($page === 'products/create') return $controller->create();
        if ($page === 'products/store') return $controller->store();
        if ($page === 'products/edit') return $controller->edit();
        if ($page === 'products/delete') return $controller->delete();
        if ($page === 'products/delete-multiple') return $controller->deleteMultiple();

        if ($page === 'address-select') return $controller->select();
        if ($page === 'address-create') return $controller->create();
        if ($page === 'address-edit') return $controller->edit();
        if ($page === 'address-delete') return $controller->delete();

        if ($page === 'profile') return $controller->index();
        if ($page === 'profile-edit') return $controller->edit();
        if ($page === 'change-password') return $controller->index();

        if ($page === 'login') return $controller->index();
        if ($page === 'register') return $controller->index();
        if ($page === 'logout') return $controller->logout();

        if ($page === 'user') return $controller->index();

        return $controller->index();
    }
}
