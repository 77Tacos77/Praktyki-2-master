<?php

namespace src\Controllers;

use src\Models\User;

class UserController extends FrontController
{
    public bool $shouldBeAuthenticated = true;

    public function index(): string
    {
        if (!isset($_SESSION['login'])) {
            header('Location: /Praktyki-2-master/login');
            exit();
        }

        // ✅ pobranie usera z bazy
        $userRepository = $this->entityManager->getRepository(User::class);

        $user = $userRepository->findOneBy([
            'login' => $_SESSION['login']
        ]);

        // ✅ przypisanie do Smarty
        $this->smarty->assign('user', $user);

        $this->setTemplate('pages/addresses.tpl');

        return $this->render();
    }
}
