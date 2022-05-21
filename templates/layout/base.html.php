<?php

namespace App\Template\layout;

use App\Core\Constantes;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= Constantes::WEB_ROOT . 'bootstrap/dist/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= Constantes::WEB_ROOT . 'login/css/style.css' ?>">
    <link rel="stylesheet" href="<?= Constantes::WEB_ROOT . 'sidebar/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= Constantes::WEB_ROOT . 'sidebar/css/style.css' ?>">
    <link rel="stylesheet" href="<?= Constantes::WEB_ROOT . 'css/style.css' ?>">
    <title>Document</title>
</head>

<body>
    <?= $content_for_views ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= Constantes::WEB_ROOT . "js/script.js" ?>"></script>
    <script src="<?= Constantes::WEB_ROOT . "login/js/bootstrap.min.js" ?>"></script>
</body>

</html>