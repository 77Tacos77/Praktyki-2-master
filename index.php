<?php
require_once __DIR__ . '/vendor/autoload.php';

use src\App;

$entityManager = require __DIR__ . '/src/doctrine.php';
$myapp = new App($entityManager);
?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt Mirjan</title>
    <link rel="stylesheet" href="style.css?v=1">
    <link rel="icon" type="image/svg+xml" href="icon.svg">
</head>
<body>
    <main>
        <section class="content">
            <div class="app-output">
                <?= $myapp->render() ?>
            </div>
        </section>
    </main>
</body>
</html>