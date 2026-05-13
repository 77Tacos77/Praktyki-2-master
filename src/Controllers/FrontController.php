<?php
namespace src\Controllers;
use Doctrine\ORM\EntityManager;
use Smarty\Smarty;

class FrontController
{
    protected Smarty $smarty;
    protected EntityManager $entityManager;
    protected string $template;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->smarty = new Smarty();

        $this->smarty->setTemplateDir(__DIR__ . '/../../views/');
        $this->smarty->setCompileDir(__DIR__ . '/../../views/templates_c/');
        $this->smarty->setCacheDir(__DIR__ . '/../../views/cache/');
        $this->smarty->setConfigDir(__DIR__ . '/../../views/configs/');
    }

    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    public function render(): string
    {
        return $this->smarty->fetch($this->template);
    }
}