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
                $_SESSION['flash'] = [
                    'type' => 'error',
                    'message' => 'Użytkownik nie istnieje ❌'
                ];
                $this->setTemplate('pages/change-password.tpl');
                return $this->render();
            }
            if ($login !== $_SESSION['login']) {
                $_SESSION['flash'] = [
                    'type' => 'error',
                    'message' => 'Nie możesz zmienić hasła innego użytkownika ❌'
                ];
                $this->setTemplate('pages/change-password.tpl');
                return $this->render();
            }
            if (!password_verify($currentPassword, $user->getPassword())) {
                $_SESSION['flash'] = [
                    'type' => 'error',
                    'message' => 'Aktualne hasło jest niepoprawne ❌'
                ];
                $this->setTemplate('pages/change-password.tpl');
                return $this->render();
            }
            if ($newPassword !== $repeatPassword) {
                $_SESSION['flash'] = [
                    'type' => 'error',
                    'message' => 'Nowe hasła nie są identyczne ❌'
                ];
                $this->setTemplate('pages/change-password.tpl');
                return $this->render();
            }
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $user->setPassword($hashedPassword);
            $this->entityManager->flush();

            $_SESSION['flash'] = [
                'type' => 'success',
                'message' => 'Hasło zostało zmienione pomyślnie! 🔐'
            ];

            header('Location: /Praktyki-2-master/profile');
            exit();
        }
        $this->setTemplate('pages/change-password.tpl');
        return $this->render();
    }
}
