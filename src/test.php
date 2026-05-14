<?php

require_once __DIR__ . '/vendor/autoload.php';

use Doctrine\ORM\Tools\SchemaTool;

$entityManager = require __DIR__ . '/src/Models/doctrine.php';

$schemaTool = new SchemaTool($entityManager);

$classes = $entityManager->getMetadataFactory()->getAllMetadata();

$schemaTool->updateSchema($classes);

echo "Schema gotowa!";