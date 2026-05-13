<?php
namespace src\Controllers;
if(isset($_SESSION['login'])){

    header('Location: index.php');

    exit();
}
class RegisterController extends FrontController
{
    public function index(): string
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $existingUser = $this->entityManager
                ->getRepository(\src\Models\User::class)
                ->findOneBy(['login' => $login]);

            if ($existingUser) {
                $this->smarty->assign('error', 'Użytkownik o takim loginie już istnieje');
            } else {
                $user = new \src\Models\User($login, $email, $password);
                $this->entityManager->persist($user);
                $this->entityManager->flush();
                header('Location: index.php?page=login');
                exit();
            }
        }
        $this->setTemplate('pages/register.tpl');

        return $this->render();
    }
}


?>
