<?php

namespace src\Controllers;

use src\Models\User;
use src\Models\Address;

class AddressController extends FrontController
{
    public bool $shouldBeAuthenticated = true;

    public function index(): string
    {
        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->findOneBy(['login' => $_SESSION['login']]);
        $addressRepository = $this->entityManager->getRepository(Address::class);
        $addresses = $addressRepository->findBy(['user' => $user->getId()]);
        $this->smarty->assign('addresses', $addresses);
        $this->setTemplate('pages/addresses.tpl');
        return $this->render();
    }
    public function create(): string
    {
        if (!isset($_SESSION['login'])) {
            header('Location: /Praktyki-2-master/?page=login');
            exit();
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $url = $_POST['url'];
            $description = $_POST['description'];
            $userRepository = $this->entityManager->getRepository(User::class);
            $user = $userRepository->findOneBy(['login' => $_SESSION['login']]);
            $address = new Address($title, $url, $description, $user);
            $this->entityManager->persist($address);
            $this->entityManager->flush();
            header('Location: /Praktyki-2-master/?page=addresses');
            exit();
        }
        $this->setTemplate('pages/address-create.tpl');
        return $this->render();
    }
    public function edit(): string
    {
        $id = $_GET['id'];
        $addressRepository = $this->entityManager->getRepository(Address::class);
        $address = $addressRepository->find($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $address->setTitle($_POST['title']);
            $address->setUrl($_POST['url']);
            $address->setDescription($_POST['description']);
            $this->entityManager->flush();
            header('Location: /Praktyki-2-master/?page=addresses');
            exit();
        }
        $this->smarty->assign('address', $address);
        $this->setTemplate('pages/address-edit.tpl');
        return $this->render();
    }
    public function delete(): void
    {
        $id = $_GET['id'];
        $addressRepository = $this->entityManager->getRepository(Address::class);
        $address = $addressRepository->find($id);
        $this->entityManager->remove($address);
        $this->entityManager->flush();
        header('Location: /Praktyki-2-master/?page=addresses');
        exit();
    }
}
