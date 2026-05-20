<?php

namespace src\Controllers;

use src\Models\User;
use src\Models\Profile;

class ProfileController extends FrontController
{
    public function __construct($em)
    {
        parent::__construct($em);
        $this->shouldBeAuthenticated = true;
    }

    public function index(): string
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
            $this->entityManager->flush();
        }

        $this->smarty->assign('profile', $profile);
        $this->smarty->assign('edit', false);

        $this->setTemplate('pages/profile.tpl');
        return $this->render();
    }
}
