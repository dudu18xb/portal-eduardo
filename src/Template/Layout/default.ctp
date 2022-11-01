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

$cakeTitle = 'Pía do Céu';
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
    <meta name='application-name' content='<?php if(!empty($seo)) { echo $cakeTitle." | ". $seo['title']; }else { echo $cakeTitle; } ?>'>
    <meta property="og:site_name" content="<?php echo $cakeTitle; ?>"/>
    <title> <?php if(!empty($seo)){ if($seo['title'] == null){ echo $cakeTitle; } else{ echo $seo['title']." | ". $cakeTitle; }}else{echo $cakeTitle;} ?></title>
    <?php if(!empty($seo)){ ?>
        <meta property="og:locale" content="pt_BR"/>
        <meta property="og:url" content="<?php echo $seo['url']; ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php if(!empty($seo)) { echo $cakeTitle." | ". $seo['title']; }else { echo $cakeTitle; } ?>"/>
        <meta property="og:description" content="<?php echo $seo['description']; ?>"/>
        <meta property="og:keywords" content="<?php echo $seo['keywords']; ?>"/>
        <?php if(!empty($blog)){ ?>
            <meta property="og:image" content="/files/Blogs/capa/<?php echo h($blog->capa) ?>">
            <meta property="og:image:type" content="image/jpeg">
            <meta property="og:image:width" content="800">
            <meta property="og:image:height" content="600">
        <?php } ?>
        <meta name="title" content="<?php if(!empty($seo)) { echo $cakeTitle." | ". $seo['title']; }else { echo $cakeTitle; } ?>">
        <meta name="description" content="<?php echo $seo['description']; ?>">
        <meta name="keywords" content="<?php echo $seo['keywords']; ?>">
        <meta name='twitter:card' content='summary'>
        <meta name='twitter:url' content='<?php echo $seo['url']; ?>'>
        <meta name='twitter:title' content='<?php if(!empty($seo)) { echo $cakeTitle." | ". $seo['title']; }else { echo $cakeTitle; } ?>'>
        <meta name='twitter:description' content='<?php echo $seo['description']; ?>'>
    <?php } ?>

    <?= $this->Html->meta('icon') ?>

    <!-- importando os novos estilos -->
    <?php
//    echo $this->Html->css('font-awesome.min');
//    echo $this->Html->css('flaticon');
//    echo $this->Html->css('themify-icons');
//    echo $this->Html->css('owl.carousel.min');
//    echo $this->Html->css('animate.min');
//    echo $this->Html->css('line-awesome');
//    echo $this->Html->css('bootstrap.min');
//    echo $this->Html->css('fancybox');
//    echo $this->Html->css('magnific-popup');
//    echo $this->Html->css('slicknav');
//    echo $this->Html->css('normalize');
//    echo $this->Html->css('bisness-style');
//    echo $this->Html->css('bisness-responsive');
    echo $this->Html->css('style');
    ?>
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800&amp;display=swap" rel="stylesheet"> -->


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.37.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
                    </label>
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Home</a></li>
                        <li><a>Notícias</a></li>
                        <li><a>Eventos</a></li>
                    </ul>
                </div>
            </div>
            <div class="navbar-center">
                <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
            </div>
            <div class="navbar-end">
                <button class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </button>
                <button class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                        <span class="badge badge-xs badge-primary indicator-item"></span>
                    </div>
                </button>
            </div>
        </div>
    </header>

<main>
    <div class="hero min-h-screen" style="background-image: url(https://placeimg.com/1000/800/arch);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>
    <div class="bg-gray-50">
        <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">Ready to dive in?</span>
                <span class="block text-indigo-600">Start your free trial today.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700">Get started</a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <?= $this->fetch('content') ?>
</main>




<?php
echo $this->Html->script([
    'vendor/jquery-3.5.1.min',
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
    'plugins',
    'bisness-main',
    'yall',

    ]);
?>
</body>
</html>
