<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT."css/bootstrap.css"?>">
    <title>Document</title>
</head>
<body>
    <ul class="nav justify-content-end bg-dark fs-4">
        <!-- <li class="nav-item">
            <a class="nav-link active" href="personnes">Personnes</a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link text-light" href="login">Deconnexion</a>
        </li>
    </ul>

    <?=$content_for_views?>

</body>
</html>
