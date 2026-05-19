<?php

namespace src\Controllers;

use src\Models\User;

class ChangePasswordController extends FrontController
{
    public function index(): string
    {
        if (!isset($_SESSION['login'])) {
            header('Location: /Praktyki-2-master/?page=login');
            exit();
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $currentPassword = $_POST['currentPassword'];
            $newPassword = $_POST['newPassword'];
            $repeatPassword = $_POST['repeatPassword'];
            $userRepository = $this->entityManager->getRepository(User::class);
            $user = $userRepository->findOneBy(['login' => $login]);
            if (!$user) {
                $this->smarty->assign('error', 'Użytkownik nie istnieje');
                $this->setTemplate('pages/change-password.tpl');
                return $this->render();
            }
            if ($login !== $_SESSION['login']) {
                $this->smarty->assign('error', 'Nie możesz zmienić hasła innego użytkownika');
                $this->setTemplate('pages/change-password.tpl');
                return $this->render();
            }
            if (!password_verify($currentPassword, $user->getPassword())) {
                $this->smarty->assign('error', 'Aktualne hasło jest niepoprawne');
                $this->setTemplate('pages/change-password.tpl');
                return $this->render();
            }
            if ($newPassword !== $repeatPassword) {
                $this->smarty->assign('error', 'Nowe hasła nie są identyczne');
                $this->setTemplate('pages/change-password.tpl');
                return $this->render();
            }
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $user->setPassword($hashedPassword);
            $this->entityManager->flush();
            $this->smarty->assign('success', 'Hasło zostało zmienione');
            $this->setTemplate('pages/change-password.tpl');
            return $this->render();
        }
        $this->smarty->assign( 'success', 'Hasło zostało zmienione' ); $this->setTemplate('pages/change-password.tpl'); return $this->render();
    }
}
