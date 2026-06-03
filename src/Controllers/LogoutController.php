<?php

namespace src\Controllers;

use src\Models\User;

class LogoutController extends FrontController
{
    public function logout(): void
    {
        // ✅ pobieramy user_id z sesji
        $userId = $_SESSION['user_id'] ?? null;

        if ($userId) {
            $user = $this->entityManager
                ->getRepository(User::class)
                ->find($userId);

            if ($user) {
                // ✅ user offline
                $user->setActive(false);

                // ✅ zapis ostatniej aktywności

                $user->setLastSeen(new \DateTimeImmutable());

                // ✅ zapis do DB
                $this->entityManager->flush();
            }
        }

        // ✅ niszczymy sesję (dopiero po zapisie do DB)
        session_destroy();
        session_start();

        $_SESSION['flash'] = [
            'type' => 'success',
            'message' => 'Wylogowano pomyślnie! 👋'
        ];

        // ✅ redirect
        header('Location: /Praktyki-2-master/login');
        exit();
    }
}
