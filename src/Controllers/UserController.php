<?php

namespace src\Controllers;

class UserController extends FrontController
{
    public function index(): string
    {
        if (!isset($_SESSION['login'])) {
            header('Location: /Praktyki-2-master/login');
            exit();
        }

        $this->setTemplate('pages/addresses.tpl');

        return $this->render();
    }
}