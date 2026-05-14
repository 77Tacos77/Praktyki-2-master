<?php

namespace src;

use src\Controllers\IndexController;
use src\Controllers\LoginController;
use src\Controllers\LogoutController;
use src\Controllers\RegisterController;
use src\Controllers\UserController;
use src\Controllers\AddressController;

use Doctrine\ORM\EntityManager;

class App
{

    private string $content;
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        try {

            $result = $entityManager
                ->getConnection()
                ->executeQuery('SELECT 1')
                ->fetchOne();

            $connected = $result === '1' || $result === 1;
        } catch (\Throwable $e) {

            $connected = false;
        }

        $this->content =
            '<h1>Aplikacja zainicjowana</h1>' .
            '<p>Połączenie z bazą danych: ' .
            ($connected ? 'udane' : 'nieudane') .
            '</p>';
    }

    public function render(): string
    {
        $page = $_GET['page'] ?? 'home';
        // dd($_GET['page']);

        $routes = [
            'user' => UserController::class,
            'home' => IndexController::class,
            'login' => LoginController::class,
            'logout' => LogoutController::class,
            'register' => RegisterController::class,
            'addresses' => AddressController::class,
            'address-create' => AddressController::class,
            'address-edit' => AddressController::class,
            'address-delete' => AddressController::class,

        ];

        if (!array_key_exists($page, $routes)) {
            return '<h1>404 Not Found</h1>';
        }
        $controllerClass = $routes[$page];
        $controller = new $controllerClass($this->entityManager);
        if ($page === 'address-create') {
            return $controller->create();
        }
        if ($page === 'address-edit') {
            return $controller->edit();
        }
        if ($page === 'address-delete') {
            return $controller->delete();
        }
        return $controller->index();
    }
}
