<?php

namespace src\Controllers;

use src\Models\User;
use src\Models\Profile;
use src\Models\Address;

class AddressImportController extends FrontController
{
    public function index(): void
    {
        if (!isset($_SESSION['login'])) {
            header('Location: /Praktyki-2-master/?page=login');
            exit();
        }
        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->findOneBy(['login' => $_SESSION['login']]);
        $profileRepository = $this->entityManager->getRepository(Profile::class);
        $profile = $profileRepository->findOneBy(['user' => $user]);
        if (!$profile) {
            die('Profil nie istnieje');
        }
        $address = new Address();
        $address->setFirstName($profile->getImie());
        $address->setLastName($profile->getNazwisko());
        $address->setStreet($profile->getUlica());
        $address->setPostcode($profile->getKodPocztowy());
        $address->setCity($profile->getMiasto());
        $address->setCountry($profile->getKraj());
        $address->setPhone($profile->getNumerTelefonu());
        $address->setUser($user);
        $this->entityManager->persist($address);
        $this->entityManager->flush();
        header('Location: /Praktyki-2-master/?page=addresses');
        exit();
    }
}
