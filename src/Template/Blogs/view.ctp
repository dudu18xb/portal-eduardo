<?php

use Cake\Routing\Router;

/**
 * @var \App\Model\Entity\Blog $blog
 * @var \App\Model\Entity\Categoria $categoria
 */


?>
<section>
    <div class="blog-sidebar blog-area section-divide">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 blog-custom mb-30">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="blog-wrapper">
                                <div class="blog-img-details">
                                    <a href="javascript:;" title="<?php echo h($blog->titulo); ?>" data-fancybox data-src="/files/Blogs/capa/<?php echo h($blog->capa); ?>">
                                        <?php echo $this->Html->image('data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', [
                                            'alt' => 'Imagem ' . $blog->titulo,
                                            'class' => 'lazy',
                                            'data-src' => '/files/Blogs/capa/' . $blog->capa,
                                        ]); ?>
                                    </a>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blog->categoria->slug, 'slug' => $blog->slug]); ?>" title="<?php echo h($blog->titulo); ?>"><?php echo h($blog->titulo); ?></a>
                                    </h4>
                                    <span><?php echo (new \Cake\I18n\FrozenDate($blog->data))->nice(); ?></span>
                                    <?php echo $blog->descricao; ?>
                                </div>
                            </div>
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
    </div>
</section>
