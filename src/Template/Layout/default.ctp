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
    <?php echo $this->Html->css('font-awesome.min'); ?>
    <?php echo $this->Html->css('flaticon'); ?>
    <?php echo $this->Html->css('themify-icons'); ?>
    <?php echo $this->Html->css('owl.carousel.min'); ?>
    <?php echo $this->Html->css('animate.min'); ?>
    <?php echo $this->Html->css('line-awesome'); ?>
    <?php echo $this->Html->css('bootstrap.min'); ?>
    <?php echo $this->Html->css('fancybox'); ?>
    <?php echo $this->Html->css('magnific-popup'); ?>
    <?php echo $this->Html->css('slicknav'); ?>
    <?php echo $this->Html->css('normalize'); ?>
    <?php echo $this->Html->css('bisness-style'); ?>
    <?php echo $this->Html->css('bisness-responsive'); ?>
    <?php echo $this->Html->css('style'); ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800&amp;display=swap" rel="stylesheet">


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>


<main>
    <?= $this->fetch('content') ?>
</main>




<?php echo $this->Html->script([
    'vendor/modernizr-3.6.0.min',
    'vendor/jquery-3.5.1.min',
    'jquery.counterup.min',
    'jquery.scrollUp.min',
    'scrollreveal.min',
    'waypoints.min',
    'bootstrap.min',
    'jquery.slicknav.min',
    'fancybox.umd',
    'owl.carousel.min',
    'bisness-main',
    'isotope.pkgd.min',
    'imagesloaded.pkgd.min',
    'yall',
    'plugins',

    ]);
?>
</body>
</html>
