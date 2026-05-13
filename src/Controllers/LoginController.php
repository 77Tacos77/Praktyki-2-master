<?php
namespace src\Controllers;
use src\Models\User;


class LoginController extends FrontController
{
    public function index(): string
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = $this->entityManager
            ->getRepository(User::class)
            ->findOneBy(['login' => $login]);
        if ($user && password_verify($password, $user->getPassword())) {
            $_SESSION['login'] = $user->getLogin();
            header('Location: index.php');
            exit();
        }else{
            $this->smarty->assign('error', 'Nieprawidłowy login lub hasło');
        }
    }
        $this->setTemplate('pages/login.tpl');

        return $this->render();
    }
}