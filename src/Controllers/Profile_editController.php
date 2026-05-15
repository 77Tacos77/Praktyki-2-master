<?php

namespace src\Controllers;

use src\Models\User;
use src\Models\Profile;

class ProfileController extends FrontController
{
    public function index(): string
    {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?page=login");
            exit();
        }

        $user = $this->entityManager->find(User::class, $_SESSION['user_id']);
        $profile = $user->getProfile();

        $this->smarty->assign('profile', $profile);
        $this->smarty->assign('edit', false);

        $this->setTemplate('pages/profile_edit.tpl');
        return $this->render();
    }

    public function edit(): string
    {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?page=login");
            exit();
        }

        $user = $this->entityManager->find(User::class, $_SESSION['user_id']);
        $profile = $user->getProfile();

        if (!$profile) {
            $profile = new Profile($user);
            $user->setProfile($profile);
            $this->entityManager->persist($profile);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $profile->setImie($_POST['imie'] ?? null);
            $profile->setNazwisko($_POST['nazwisko'] ?? null);
            $profile->setUlica($_POST['ulica'] ?? null);
            $profile->setKodPocztowy($_POST['kod_pocztowy'] ?? null);
            $profile->setMiasto($_POST['miasto'] ?? null);
            $profile->setKraj($_POST['kraj'] ?? null);
            $profile->setNumerTelefonu($_POST['numer_telefonu'] ?? null);

            $this->entityManager->flush();

            header("Location: index.php?page=profile");
            exit();
        }

        $this->smarty->assign('profile', $profile);
        $this->smarty->assign('edit', true);

        $this->setTemplate('pages/profile_edit.tpl');
        return $this->render();
    }
}
