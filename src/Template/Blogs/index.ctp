<?php

use Cake\Routing\Router;

/**
 * @var \App\Model\Entity\Blog $blog
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<?php if ($verificaBlogs > 0) { ?>
    <section class="blog-sidebar blog-area section-divide item">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 blog-custom mb-30">
                    <div class="row">
                        <div class="col-md-12 col col-sm-12">
                            <div class="section-title-s1 text-center pbb-30-i">
                                <h2 class="text-left">Notícias</h2>
                            </div>
                        </div>
                        <?php foreach ($blogs as $blog) { ?>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 <?php if ($verificaBlogs == 2) { echo h('d-md-none d-lg-block'); } ?>">
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
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <?php echo $this->element('paginacao'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="grid-fixed">
                        <div class="widget">
                            <?php echo $this->Form->create(null, ['valueSources' => 'blogs', 'class' => 'search-form', 'id' => 'sidebar_search', 'url' => ['controller' => 'blogs', 'action' => 'index']]); ?>
                            <?php echo $this->Form->control('q', ['label' => false, 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Buscar por título']); ?>
                            <button type="submit"><span class="ti-search"></span></button>
                            <?php echo $this->Form->end(); ?>
                        </div>
                        <?php if ($verificaCategorias > 0) { ?>
                            <div class="widget">
                                <h6 class="widget-title">Categorias</h6>
                                <ul class="blog-categories">
                                    <?php foreach ($categorias as $categoria) { ?>
                                        <li><a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'categoria', 'categoria_slug' => $categoria->slug]); ?>" title="Buscar por categoria <?php echo h($categoria->nome) ?>">
                                                <?php echo h($categoria->nome) ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                        <?php if ($verificaLast > 0) { ?>
                            <div class="widget">
                                <h6 class="widget-title">Veja Também</h6>
                                <ul class="recent-posts">
                                    <?php foreach ($lastblogs as $blog) { ?>
                                        <li>
                                            <div class="widget-posts-image">
                                                <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blog->categoria->slug, 'slug' => $blog->slug]); ?>" title="<?php echo h($blog->titulo); ?>">
                                                    <?php echo $this->Html->image('data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', [
                                                        'alt' => 'Imagem ' . $blog->titulo,
                                                        'class' => 'lazy',
                                                        'data-src' => '/files/Blogs/capa/' . $blog->capa,
                                                    ]); ?>
                                                </a>
                                            </div>
                                            <div class="widget-posts-body">
                                                <h6 class="widget-posts-title">
                                                    <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blog->categoria->slug, 'slug' => $blog->slug]); ?>" title="<?php echo h($blog->titulo); ?>">
                                                        <?php echo strip_tags(substr($blog->titulo, 0, 50)); ?>
                                                    </a>
                                                </h6>
                                                <div class="widget-posts-meta"><?php echo (new \Cake\I18n\FrozenDate($blog->data))->nice(); ?></div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-sidebar blog-area section-divide item">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 blog-custom mb-30">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <h4>Não foi encontrado post, por favor tente novamente!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } else { ?>
    <section class="blog-sidebar blog-area section-divide item">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 blog-custom mb-30">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <h4>Não foi encontrado post, por favor tente novamente!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

