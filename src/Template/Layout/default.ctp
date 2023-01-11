<?php

use Cake\Routing\Router;

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\Model\Entity\Categoria $categoria
 * @var \App\Model\Entity\Blog $blog
 */

$cakeTitle = 'Eduardo';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $this->Html->charset() ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Health medical template project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#28C5BC">
    <meta name="apple-mobile-web-app-status-bar-style" content="#325A7E">
    <meta name="msapplication-navbutton-color" content="#325A7E">

    <?= $this->Html->meta('icon') ?>

    <!-- importando os novos estilos -->
    <?php
    echo $this->Html->css('bootstrap.min'); // Boostrap 4
    echo $this->Html->css('all.min'); //FontAwesome 6.2
    echo $this->Html->css('flaticon');
    echo $this->Html->css('normalize');
    echo $this->Html->css('animate.min');
    echo $this->Html->css('style'); // style pessoal
    ?>
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800&amp;display=swap" rel="stylesheet"> -->


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <!-- Material Designer -->
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<header>
    <section class="sec-header-main">
        <div class="container">
            <div class="logo-wrap">
                <a href="javascript:;" class="logo-link">
                    <img src="https://images.pexels.com/photos/14792109/pexels-photo-14792109.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                </a>
            </div>
            <nav class="menu-link">
                <ul>
                    <li><a href="javascript:;"><i class="fa-solid fa-house mrr-10"></i>Home</a></li>
                    <li><a href="javascript:;"><i class="fa-solid fa-list-ul mrr-10"></i>Categorias</a></li>
                    <li><a href="javascript:;"><i class="fa-regular fa-newspaper mrr-10"></i>Noticias</a></li>
                    <li><a href="javascript:;"><i class="fa-solid fa-shop mrr-10"></i>Loja</a></li>
                    <li><a href="javascript:;"><i class="fa-solid fa-magnifying-glass mrr-10"></i>Pesquisar</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="sec-header-bottom"></section>
</header>
<main>
    <?= $this->fetch('content') ?>
</main>
<footer>
    <div class="w-100 float-left">
        <h1>Footer</h1>
    </div>
</footer>
<?php
echo $this->Html->script([
    'vendor/jquery-3.5.1.min',
    'all.min', //FontAwesome 6.2
//    'vendor/modernizr-3.6.0.min',
//    'jquery.counterup.min',
//    'jquery.scrollUp.min',
//    'scrollreveal.min',
//    'waypoints.min',
//    'bootstrap.min',
//    'jquery.slicknav.min',
//    'fancybox.umd',
//    'owl.carousel.min',
//    'isotope.pkgd.min',
//    'imagesloaded.pkgd.min',
//    'plugins',
//    'bisness-main',
//    'yall',

]);
?>
</body>
</html>
