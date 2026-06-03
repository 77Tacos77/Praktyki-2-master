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

    // ------------------- PROFILE VIEW -------------------
    public function index(): string
    {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?page=login");
            exit();
        }

        $user = $this->entityManager->find(User::class, $_SESSION['user_id']);
        $profile = $user->getProfile();

        // ✅ jeśli brak profilu → stwórz
        if (!$profile) {
            $profile = new Profile($user);
            $user->setProfile($profile);

            $this->entityManager->persist($profile);
            $this->entityManager->flush();
        }

        $this->smarty->assign('profile', $profile);
        $this->smarty->assign('user', $user);
        $this->smarty->assign('edit', false);

        $this->setTemplate('pages/profile.tpl');
        return $this->render();
    }

    // ------------------- UPDATE FIELD -------------------
    public function updateField(): void
    {
        // ✅ odbiór JSON z fetch
        $data = json_decode(file_get_contents("php://input"), true);

        $field = $data['field'] ?? null;
        $value = $data['value'] ?? null;

        // ✅ whitelist → bezpieczeństwo
        $allowedFields = [
            'imie',
            'nazwisko',
            'ulica',
            'kod_pocztowy',
            'miasto',
            'kraj',
            'numer_telefonu'
        ];

        if (!in_array($field, $allowedFields)) {
            echo json_encode(['status' => 'error', 'message' => 'Nieprawidłowe pole']);
            exit;
        }

        // ✅ sprawdzenie logowania
        if (!isset($_SESSION['user_id'])) {
            echo json_encode(['status' => 'error', 'message' => 'Brak użytkownika']);
            exit;
        }

        // ✅ znajdź usera
        $user = $this->entityManager
            ->getRepository(User::class)
            ->find($_SESSION['user_id']);

        if (!$user) {
            echo json_encode(['status' => 'error', 'message' => 'User nie istnieje']);
            exit;
        }

        // ✅ pobierz profil
        $profile = $user->getProfile();

        if (!$profile) {
            echo json_encode(['status' => 'error', 'message' => 'Brak profilu']);
            exit;
        }

        // ✅ ustawienie danych (SETTERY)
        switch ($field) {

            case 'imie':
                $profile->setImie($value);
                break;

            case 'nazwisko':
                $profile->setNazwisko($value);
                break;

            case 'ulica':
                $profile->setUlica($value);
                break;

            case 'kod_pocztowy':
                $profile->setKodPocztowy($value);
                break;

            case 'miasto':
                $profile->setMiasto($value);
                break;

            case 'kraj':
                $profile->setKraj($value);
                break;

            case 'numer_telefonu':
                $profile->setNumerTelefonu($value);
                break;

            default:
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Nieznane pole'
                ]);
                exit;
        }

        // ✅ zapis do bazy
        $this->entityManager->flush();

        // ✅ odpowiedź dla fetch
        echo json_encode([
            'status' => 'ok'
        ]);
        exit;
    }
}
?>