<?php

use Cake\Routing\Router;

/**
 * @var \App\Model\Entity\Banner $banner
 * @var \App\Model\Entity\Categoria $categoria
 */


?>
<!-- NOVO -->
<?php if ($verificaBanners > 0) { ?>
    <section>
        <div class="slider-area">
            <div class="slider-active owl-carousel">
                <?php foreach ($banners as $banner) { ?>
                    <div class="slider-wrapper vh d-flex slide-item-<?php echo h($banner->id); ?> lazy-bg"
                         style="background-color: #e6e6e6;">
                        <style type="text/css">
                            .slide-item-<?php echo h($banner->id); ?>.lazy-bg-loaded {
                                background-image: url('/files/Banners/imagem/<?php echo h($banner->imagem); ?>');
                                background-color: transparent;
                            }
                        </style>
                        <div class="container">
                            <div class="slider-content text-center slider-text-animation">
                                <?php if (!empty($banner->titulo)) { ?>
                                    <h1><?php echo h($banner->titulo); ?></h1>
                                <?php } ?>
                                <?php if (!empty($banner->sub_titulo)) { ?>
                                    <p><?php echo h($banner->sub_titulo); ?></p>
                                <?php } ?>
                                <?php if (!empty($banner->texto_botao) || !empty($banner->link)) { ?>
                                    <a href="<?php echo h($banner->link); ?>"
                                       title="<?php echo h($banner->texto_botao); ?>"
                                       target="_blank"><?php echo h($banner->texto_botao); ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
<?php if ($verificaBlogs > 0) { ?>
    <section>
        <div class="sec-wrap-emphasis">
            <div class="container">
                <div class="content-emphasis">
                    <div class="row">
                        <?php if(!empty($blogs[0])){ ?>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-7">
                                <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blogs[0]['categoria']['slug'], 'slug' => $blogs[0]['slug']]); ?>" class="link-emphasis" title="<?php echo h($blogs[0]['titulo']) ?>">
                                    <div class="emphasis-image">
                                        <?php echo $this->Html->image('data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', [
                                            'alt' => 'Imagem ' . $blogs[0]['titulo'],
                                            'class' => 'lazy',
                                            'data-src' => '/files/Blogs/capa/' . $blogs[0]['capa'],
                                        ]); ?>
                                    </div>
                                    <div class="emphasis-description">
                                        <span class="category-title"><?php echo h($blogs[0]['categoria']['nome']) ?></span>
                                        <h2><?php echo h($blogs[0]['titulo']) ?></h2>
                                        <span class="calendar-title"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo (new \Cake\I18n\FrozenDate($blogs[0]['data']))->nice(); ?></span>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                        <?php if(!empty($blogs[1]) || !empty($blogs[2])){ ?>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5">
                            <div class="w-100 float-left">
                                <div class="row">
                                    <?php if(!empty($blogs[1])){ ?>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blogs[1]['categoria']['slug'], 'slug' => $blogs[1]['slug']]); ?>" class="link-emphasis" title="<?php echo h($blogs[1]['titulo']) ?>">
                                                <div class="emphasis-image">
                                                    <?php echo $this->Html->image('data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', [
                                                        'alt' => 'Imagem ' . $blogs[1]['titulo'],
                                                        'class' => 'lazy',
                                                        'data-src' => '/files/Blogs/capa/' . $blogs[1]['capa'],
                                                    ]); ?>
                                                </div>
                                                <div class="emphasis-description">
                                                    <span class="category-title"><?php echo h($blogs[1]['categoria']['nome']) ?></span>
                                                    <h2><?php echo h($blogs[1]['titulo']) ?></h2>
                                                    <span class="calendar-title"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo (new \Cake\I18n\FrozenDate($blogs[1]['data']))->nice(); ?></span>
                                                </div>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <?php if(!empty($blogs[2])){ ?>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blogs[2]['categoria']['slug'], 'slug' => $blogs[2]['slug']]); ?>" class="link-emphasis" title="<?php echo h($blogs[2]['titulo']) ?>">
                                                <div class="emphasis-image">
                                                    <?php echo $this->Html->image('data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', [
                                                        'alt' => 'Imagem ' . $blogs[2]['titulo'],
                                                        'class' => 'lazy',
                                                        'data-src' => '/files/Blogs/capa/' . $blogs[2]['capa'],
                                                    ]); ?>
                                                </div>
                                                <div class="emphasis-description">
                                                    <span class="category-title"><?php echo h($blogs[2]['categoria']['nome']) ?></span>
                                                    <h2><?php echo h($blogs[2]['titulo']) ?></h2>
                                                    <span class="calendar-title"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo (new \Cake\I18n\FrozenDate($blogs[2]['data']))->nice(); ?></span>
                                                </div>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php if ($verificaCategorias > 0) { ?>
    <section>
        <?php foreach ($categorias as $categoria) { ?>
            <div class="blog-area section-divide text center">
                <div class="container">
                    <div class="section-title-s3 text-center pbb-30-i">
                        <span class="mbb-0-i text-left">Notícias</span>
                        <h2 class="text-left"><?php echo h($categoria->nome); ?></h2>
                    </div>
                    <div class="row">
                        <?php $i = 0; ?>
                        <?php foreach ($categoria->blogs as $blog) { ?>
                            <?php
                            $i = $i + 1;
                            ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 <?php if ($verificaCategorias == 2) { echo h('d-md-none d-lg-block'); } ?> <?php if ($i >= 4) { echo h('d-none'); } ?>">
                                <div class="blog-wrapper mb-30">
                                    <div class="blog-img">
                                        <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blog->categoria->slug, 'slug' => $blog->slug]); ?>"
                                           title="<?php echo strip_tags(substr($blog->titulo, 0, 50)); ?>">
                                            <?php echo $this->Html->image('data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', [
                                                'alt' => 'Imagem ' . $blog->titulo,
                                                'class' => 'lazy',
                                                'data-src' => '/files/Blogs/capa/' . $blog->capa,
                                            ]); ?>
                                        </a>
                                    </div>
                                    <div class="blog-text">
                                        <span><?php echo (new \Cake\I18n\FrozenDate($blog->data))->nice(); ?></span>
                                        <h4 class="mbb-0-i">
                                            <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blog->categoria->slug, 'slug' => $blog->slug]); ?>"
                                               title="<?php echo strip_tags(substr($blog->titulo, 0, 50)); ?>">
                                                <?php echo strip_tags(substr($blog->titulo, 0, 50)); ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>
<?php } ?>
