<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
$mustache = new Mustache_Engine(
    [
        'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/../mustache/')
    ]
);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=NTR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="header">
        <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="cart">
            <img src="images/icon/cart.svg" alt="cart">
            <span class="cart__count">0</span>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <section class="confirmation">
                <? echo $mustache->render('confirmation', include($_SERVER['DOCUMENT_ROOT'] . '../corfirmation.php')) ?>
            </section>

            <section class="services">
                <? echo $mustache->render('services-list', include($_SERVER['DOCUMENT_ROOT'] . '../index-cards.php')) ?>
            </section>
        </div>
    </main>



</body>

</html>