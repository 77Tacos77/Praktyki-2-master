<?php

namespace src\Controllers;

class LoginController extends FrontController
{
    public function index(): string
    {
        $this->setTemplate('pages/login.tpl');

        return $this->render();
    }
}