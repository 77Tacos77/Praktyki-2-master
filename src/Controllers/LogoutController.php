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
        header('Location: index.php');
        exit();
    }
}
?>