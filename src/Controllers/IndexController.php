<?php

namespace src\Controllers;

class IndexController extends FrontController
{
    public function index(): string
    {
        $this->setTemplate('pages/index.tpl');

        return $this->render();
    }
}