<?php

namespace src\Controllers;

use Doctrine\ORM\EntityManager;
use Smarty\Smarty;
use src\Models\User;

class FrontController
{
    protected Smarty $smarty;
    protected EntityManager $entityManager;
    protected string $template;

    public User $user;

    public bool $shouldBeAuthenticated = false;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->smarty = new Smarty();

        $this->smarty->setTemplateDir(__DIR__ . '/../../views/');
        $this->smarty->setCompileDir(__DIR__ . '/../../views/templates_c/');
        $this->smarty->setCacheDir(__DIR__ . '/../../views/cache/');
        $this->smarty->setConfigDir(__DIR__ . '/../../views/configs/');

        $userId =  $_SESSION['user_id'] ?? null;
        if ($userId) {
            $userRepository = $this->entityManager->getRepository(User::class);
            $this->user = $userRepository->find($userId);
        } else {
            if ($this->shouldBeAuthenticated) {
                header('Location: /Praktyki-2-master/login');
                exit();
            }
        }
    }

    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    public function render(): string
{
    if (isset($_SESSION['flash'])) {
        $this->smarty->assign('flash', $_SESSION['flash']);
        unset($_SESSION['flash']);
    }

    return $this->smarty->fetch($this->template);
}

}
