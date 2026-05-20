<?php
namespace src\Controllers;

use src\Models\User;

class LoginController extends FrontController
{
    public function index(): string
    {
        if (isset($_SESSION['login'])) {
            header('Location: index.php');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $login = $_POST['login'];
            $password = $_POST['password'];

            $user = $this->entityManager
                ->getRepository(User::class)
                ->findOneBy(['login' => $login]);

            if ($user && password_verify($password, $user->getPassword())) {

                $_SESSION['login'] = $user->getLogin();
                $_SESSION['user_id'] = $user->getId();

                // ⭐ POPRAWNY FLASH
                $_SESSION['flash'] = [
                    'type' => 'success',
                    'message' => 'Zalogowano pomyślnie'
                ];

                $user->setActive(true);
                $this->entityManager->flush();

                header('Location: /Praktyki-2-master/');
                exit();

            } else {

                // ⭐ POPRAWNY FLASH DLA BŁĘDU
                $_SESSION['flash'] = [
                    'type' => 'error',
                    'message' => 'Nieprawidłowy login lub hasło'
                ];
            }
        }

        $this->setTemplate('pages/login.tpl');
        return $this->render();
    }
}
