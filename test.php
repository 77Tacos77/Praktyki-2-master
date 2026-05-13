<?php

require_once __DIR__ . '/vendor/autoload.php';

$entityManager = require __DIR__ . '/src/doctrine.php';

use src\Models\User;

$user = new User("Jakub", "jakubnoculak08@gmail.com", "piesek123!!!");

$entityManager->persist($user);
$entityManager->flush();

echo "User zapisany!";