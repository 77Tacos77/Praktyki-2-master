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
            header('Location: /Praktyki-2-master/login');
            exit();
        }
        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->findOneBy(['login' => $_SESSION['login']]);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $address = new Address();
            $address->setFirstName($_POST['firstName']);
            $address->setLastName($_POST['lastName']);
            $address->setStreet($_POST['street']);
            $address->setPostcode($_POST['postcode']);
            $address->setCity($_POST['city']);
            $address->setCountry($_POST['country']);
            $address->setPhone($_POST['phone']);
            $address->setUser($user);
            $this->entityManager->persist($address);
            $this->entityManager->flush();
            $_SESSION['flash'] = [
    'type' => 'success',
    'message' => 'Adres został dodany!'
];
            header('Location: index.php?page=addresses');
            exit();
        }
        $this->setTemplate('pages/address-create.tpl');
        return $this->render();
    }
    public function edit(): string
{
    if (!isset($_SESSION['login'])) {
        header('Location: index.php?page=login');
        exit();
    }

    $addressId = $_GET['id'] ?? null;

    if (!$addressId) {
        $_SESSION['flash'] = [
            'type' => 'error',
            'message' => 'Nie znaleziono adresu!'
        ];
        header('Location: index.php?page=addresses');
        exit();
    }

    $address = $this->entityManager->find(Address::class, $addressId);

    if (!$address) {
        $_SESSION['flash'] = [
            'type' => 'error',
            'message' => 'Adres nie istnieje!'
        ];
        header('Location: index.php?page=addresses');
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $address->setFirstName($_POST['firstName']);
        $address->setLastName($_POST['lastName']);
        $address->setStreet($_POST['street']);
        $address->setPostcode($_POST['postcode']);
        $address->setCity($_POST['city']);
        $address->setCountry($_POST['country']);
        $address->setPhone($_POST['phone']);

        $this->entityManager->flush();

        $_SESSION['flash'] = [
            'type' => 'success',
            'message' => 'Adres został zaktualizowany!'
        ];

        header('Location: index.php?page=addresses');
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
            $_SESSION['flash'] = [
    'type' => 'success',
    'message' => 'Adres został usunięty!'   
            ];
        header('Location: /Praktyki-2-master/addresses');
        exit();
    }
    public function select(): void
{
    $id = $_GET['id'];

    $_SESSION['selected_address'] = $id;

    header('Location: /Praktyki-2-master/?page=addresses');
    exit();
}

}
