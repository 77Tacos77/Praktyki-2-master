<?php

require_once __DIR__ . '/vendor/autoload.php';

$entityManager = require __DIR__ . '/src/doctrine.php';

use Doctrine\ORM\Tools\SchemaTool;

$schemaTool = new SchemaTool($entityManager);

$classes = $entityManager->getMetadataFactory()->getAllMetadata();

$schemaTool->updateSchema($classes, true);

echo "OK - baza zaktualizowana";