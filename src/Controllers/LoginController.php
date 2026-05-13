<?php
namespace src\Controllers;
use src\Models\User;
if(isset($_SESSION['login'])){

    header('Location: index.php');

    exit();
}

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
            $user->setActive(true);
            $this->entityManager->flush();
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