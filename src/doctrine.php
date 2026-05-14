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
    'port' => 3306,
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'dbname' => 'praktyka',
    'user' => 'root',
    'password' => '',
];

$connection = DriverManager::getConnection($conn, $config);

return new EntityManager($connection, $config);