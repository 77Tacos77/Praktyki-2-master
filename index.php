<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

use src\App;

$entityManager = require __DIR__ . '/src/doctrine.php';
$myapp = new App($entityManager);
?>
 <?= $myapp->render() ?>
