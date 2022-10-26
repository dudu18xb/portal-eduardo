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
</head>
<body>
<header>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <div class="page-wrapper">
        <div class="preloader">
            <div class="inner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <section>
        <div class="hearder_area">
            <div id="header_sticky" class="mainmenu_area">
                <div class="container">
                    <div class="row d-flex flex-wrap align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-10">
                            <div class="logo">
                                <a href="<?php echo Router::url(['controller' => 'pages', 'action' => 'home', 'prefix' => false], true); ?>" title="<?php echo h($cakeTitle); ?>">
                                    <?php echo $this->Html->image('data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', [
                                        'alt' => 'Imagem ' . $cakeTitle,
                                        'class' => 'lazy',
                                        'data-src' => '/img/logo/logo-branca.png',
                                    ]); ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-2 text-right">
                            <div class="mainmenu">
                                <ul id="nav">
                                    <li>
                                        <a href="<?php echo Router::url(['controller' => 'pages', 'action' => 'home', 'prefix' => false], true); ?>" title="Home">Home</a>
                                    </li>
                                    <li><a href="<?php echo Router::url(['controller' => 'pages', 'action' => 'about', 'prefix' => false], true); ?>" title="Quem Somos">Quem Somos</a></li>
                                    <li><a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'index']); ?>" title="BLog">BLog <?php if ($verificaCategoriaBlogsMenus > 0) { ?><i class="fa fa-angle-down"></i> <?php } ?></a>
                                        <?php if ($verificaCategoriaBlogsMenus > 0) { ?>
                                            <ul class="sub-menu text-left">
                                                <?php foreach ($categoriaBlogsMenus as $categoria) { ?>
                                                    <li><a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'categoria', 'categoria_slug' => $categoria->slug]); ?>" title="<?php echo h($categoria->nome); ?>"><?php echo h($categoria->nome); ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
<main>
    <?= $this->fetch('content') ?>
</main>

<footer>
    <div class="footer-top-area section-divide">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-10">
                    <div class="footer-wrapper">
                        <div class="logo">
                            <a href="<?php echo Router::url(['controller' => 'pages', 'action' => 'home', 'prefix' => false], true); ?>" title="<?php echo h($cakeTitle); ?>">
                                <?php echo $this->Html->image('data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', [
                                    'alt' => 'Imagem ' . $cakeTitle,
                                    'class' => 'lazy',
                                    'data-src' => '/img/logo/logo-branca.png',
                                ]); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-wrapper">
                        <h4 class="footer-text">Informações</h4>
                        <ul class="footer-menu">
                            <li><a href="<?php echo Router::url(['controller' => 'pages', 'action' => 'home', 'prefix' => false], true); ?>" title="Home" class="text-nowrap"><i class="fa fa-caret-right"></i>Home</a></li>
                            <li><a href="<?php echo Router::url(['controller' => 'pages', 'action' => 'about', 'prefix' => false], true); ?>" title="Quem Somos" class="text-nowrap"><i class="fa fa-caret-right"></i>Quem Somos</a></li>
                            <li><a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'index', 'prefix' => false], true); ?>" title="Blogs" class="text-nowrap"><i class="fa fa-caret-right"></i>Blogs</a></li>
                            <?php if ($verificaCategoriaBlogsMenus > 0) { ?>
                                <?php foreach ($categoriaBlogsMenus as $categoria) { ?>
                                    <li><a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'categoria', 'categoria_slug' => $categoria->slug]); ?>" title="<?php echo h($categoria->nome); ?>" class="text-nowrap"><i class="fa fa-caret-right"></i><?php echo h($categoria->nome); ?></a></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php if ($verificaLastblogsMenu > 0) { ?>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-wrapper">
                            <h4 class="footer-text">Outros Posts</h4>
                            <ul class="footers">
                                <?php foreach ($lastblogsMenu as $blog) { ?>
                                    <li>
                                        <div class="footer-img">
                                            <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blog->categoria->slug, 'slug' => $blog->slug]); ?>"
                                               title="<?php echo strip_tags(substr($blog->titulo, 0, 50)); ?>">
                                                <?php echo $this->Html->image('data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', [
                                                    'alt' => 'Imagem ' . $blog->titulo,
                                                    'class' => 'lazy',
                                                    'data-src' => '/files/Blogs/capa/' . $blog->capa,
                                                ]); ?>
                                            </a>
                                        </div>
                                        <div class="footer-info">
                                            <span><?php echo (new \Cake\I18n\FrozenDate($blog->data))->nice(); ?></span>
                                            <h4 class="mbb-0-i">
                                                <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blog->categoria->slug, 'slug' => $blog->slug]); ?>"
                                                   title="<?php echo strip_tags(substr($blog->titulo, 0, 50)); ?>">
                                                    <?php echo strip_tags(substr($blog->titulo, 0, 50)); ?>
                                                </a>
                                            </h4>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-wrapper">
                        <h4 class="footer-text">Cortes Piá do Céu</h4>
                        <ul class="footers">
                            <li>
                                <div class="footer-img">
                                    <a href="#"><img src="img/img-1.jpg" alt=""></a>
                                </div>
                                <div class="footer-info">
                                    <h4><a href="#">How to Improve Your Sales Volume</a></h4>
                                    <span>24th Aug 2019</span>
                                </div>
                            </li>
                            <li>
                                <div class="footer-img">
                                    <a href="#"><img src="img/img-2.jpg" alt=""></a>
                                </div>
                                <div class="footer-info">
                                    <h4><a href="#">How to Improve Your Sales Volume</a></h4>
                                    <span>24th Aug 2019</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bootom-area pt-40 mt-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="copyright">
                        <?php $year = (new DateTime)->format("Y"); ?>
                        <p>Copyright © <?php echo $year ?> - <?php echo h($cakeTitle); ?> - Todos os direitos reservados</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-icon">
                        <?php if(!empty($configs->facebook)){ ?>
                            <a href="<?php echo h($configs->facebook) ?>" target="_blank" title="Acessar fanpage do Facebook"><i class="fa fa-facebook"></i></a>
                        <?php } ?>
                        <?php if(!empty($configs->instagram)){ ?>
                            <a href="<?php echo h($configs->instagram) ?>" target="_blank" title="Acessar o perfil do Instagram"><i class="fa fa-instagram"></i></a>
                        <?php } ?>

                        <?php if(!empty($configs->twitter)){ ?>
                            <a href="<?php echo h($configs->twitter) ?>" target="_blank" title="Acessar o perfil do Twitter"><i class="fa fa-twitter"></i></a>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


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
