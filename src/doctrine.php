<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\DriverManager;

$config = ORMSetup::createAttributeMetadataConfiguration(
    [__DIR__ . '/Models'],
    true
);

$conn = [
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'dbname' => 'praktyka',
    'user' => 'root',
    'password' => '',
];

$connection = DriverManager::getConnection($conn, $config);

return new EntityManager($connection, $config);