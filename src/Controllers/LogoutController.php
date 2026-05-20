<?php
namespace src\Controllers;

use src\Models\User;

class LogoutController extends FrontController
{
    public function index(): void{
        $login = $_SESSION['login'];
        $user = $this->entityManager
            ->getRepository(User::class)
            ->findOneBy(['login' => $login]);
        if ($user) {
            $user->setActive(false);
            $this->entityManager->flush();
        }
        session_destroy();
        session_start();
        $_SESSION['flash'] = [
    'type' => 'success',
    'message' => 'Wylogowano pomyślnie'
];

        header('Location: http://localhost/Praktyki-2-master/login');
        exit();
    }
}
?>