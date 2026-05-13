<?php
namespace src;

use src\Controllers\IndexController;
use src\Controllers\LoginController;
use Doctrine\ORM\EntityManager;

class App {

    private string $content;

    public function __construct(EntityManager $entityManager) {

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

        if($page === 'login'){

            $controller = new LoginController();

            return $controller->index();
        }

        $controller = new IndexController();

        return $controller->index();
    }
}
?>