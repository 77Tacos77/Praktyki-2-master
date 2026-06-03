<?php

namespace src\Controllers;

use src\Models\User;

class LoginController extends FrontController
{
    public function __construct($em)
    {
        parent::__construct($em);
    }

    public function index(): string
    {
        if (isset($_SESSION['user_id'])) {
            header("Location: /Praktyki-2-master/profile");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $login = $_POST['login'] ?? ''; // input name= email, ale używamy jako login
            $password = $_POST['password'] ?? '';

            $user = $this->entityManager
                ->getRepository(User::class)
                ->findOneBy(['login' => $login]);



            var_dump(password_verify("$2y$10$DM0VEtH/tubZxsGxZg0.A.g8UEeuujs3hSmC/IWFLLmzwFjnYKOzi", $user->getPassword()));
            exit;


            if (!$user) {
                $_SESSION['flash'] = [
                    'type' => 'error',
                    'message' => 'Nieprawidłowy login lub hasło ❌'
                ];
                header("Location: /Praktyki-2-master/login");
                exit();
            }

            if (!password_verify($password, $user->getPassword())) {
                $_SESSION['flash'] = [
                    'type' => 'error',
                    'message' => 'Nieprawidłowy login lub hasło ❌'
                ];
                header("Location: /Praktyki-2-master/login");
                exit();
            }

            $_SESSION['user_id'] = $user->getId();

            $user->setActive(true);
            $user->setLastSeen(new \DateTimeImmutable());

            $this->entityManager->flush();

            $_SESSION['flash'] = [
                'type' => 'success',
                'message' => 'Zalogowano pomyślnie ✅'
            ];

            header("Location: /Praktyki-2-master/profile");
            exit();
        }

        $this->setTemplate('pages/login.tpl');
        return $this->render();
    }
}
