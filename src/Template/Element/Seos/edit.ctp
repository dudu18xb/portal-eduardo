<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seo $seo
 * @var \App\Model\Entity\Linha $linha
 * @var \App\Model\Entity\Produto $produto
 * @var \App\Model\Entity\Receitacategoria $receitacategoria
 * @var \App\Model\Entity\Receita $receita
 * @var \App\Model\Entity\Categoria $categoria
 * @var \App\Model\Entity\Post $post
 * @var \App\Model\Entity\Pagina $pagina
 * @var \App\Model\Entity\Secundariopagina $secundariopagina
 * @var boolean $isSearch
 */

?>
<br>
<div class="box-header with-border" style="background-color: #dedede;">
    <div class="content-seo">
        <h4 class="box-title mb-0 pd-15">
            <?php echo __('Editar SEO') ?>
        </h4>
    </div>
</div>
<div class="box-body pd-0">
    <div class="container-fluid"
         style="padding-top: 15px; border:1px solid #ddd; border-top: 0">
        <div class="row">
            <?php
            echo $this->Form->control('seo.meta_title', [
                'label' => 'Meta Título',
                'type' => 'text',
                'required' => true,
                'templateVars' => [
                    'classContainer' => 'col-xs-12 col-sm-12 col-md-6 col-lg-6',
                ],
            ]);
            echo $this->Form->control('seo.meta_description', [
                'label' => 'Meta Descrição',
                'type' => 'text',
                'required' => true,
                'templateVars' => [
                    'classContainer' => 'col-xs-12 col-sm-12 col-md-6 col-lg-6',
                    'after' => $this->Html->tag(
                        'span',
                        'Descrição curta para o Google | Max. 156 caracteres',
                        [
                            'class' => 'help-block',
                        ]
                    ),
                ],
            ]);
            echo $this->Form->control('seo.meta_keywords', [
                'label' => 'Meta Palavras Chaves',
                'data-role' => 'tagsinput',
                'type' => 'text',
                'required' => true,
                'templateVars' => [
                    'classContainer' => 'col-xs-12 col-sm-12 col-md-6 col-lg-6',
                    'after' => $this->Html->tag(
                        'span',
                        'Palavras chaves para o Google | Max. 12 palavras, separadas por vírgula',
                        [
                            'class' => 'help-block',
                        ]
                    ),
                ],
            ]);
            echo $this->Form->control('seo.meta_imagem', [
                'label' => 'Meta Imagem',
                'type' => 'file',
                'required' => false,
                'templateVars' => [
                    'classContainer' => 'col-xs-12 col-sm-12 col-md-6 col-lg-6',
                    'after' => $this->Html->tag(
                        'span',
                        'Tam. máx: 800kb - 1280px x 768px',
                        [
                            'class' => 'help-block',
                        ]
                    ),
                ],
            ]);
            ?>
            <?php if (!empty($seo->meta_image)) { ?>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <label>Meta Imagem Atual</label>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 position-relative">
                            <a href="/files/Seos/meta_image/site-<?php echo h($seo->meta_image); ?>"
                               data-fancybox="gallery" title="Visualizar Imagem">
                                <?php echo $this->Html->image('/files/Seos/meta_image/img-' . $seo->meta_image, [
                                    'class' => 'img-responsive painel',
                                ]); ?>
                            </a>
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
            <?php } ?>
            <?php if (!empty($linha->seo->meta_image)) { ?>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <label>Meta Imagem Atual</label>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 position-relative">
                            <a href="/files/Seos/meta_image/site-<?php echo h($linha->seo->meta_image); ?>"
                               data-fancybox="gallery" title="Visualizar Imagem">
                                <?php echo $this->Html->image('/files/Seos/meta_image/img-' . $linha->seo->meta_image, [
                                    'class' => 'img-responsive painel',
                                ]); ?>
                            </a>
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
            <?php } ?>
            <?php if (!empty($produto->seo->meta_image)) { ?>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <label>Meta Imagem Atual</label>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 position-relative">
                            <a href="/files/Seos/meta_image/site-<?php echo h($produto->seo->meta_image); ?>"
                               data-fancybox="gallery" title="Visualizar Imagem">
                                <?php echo $this->Html->image('/files/Seos/meta_image/img-' . $produto->seo->meta_image, [
                                    'class' => 'img-responsive painel',
                                ]); ?>
                            </a>
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
            <?php } ?>
            <?php if (!empty($receitacategoria->seo->meta_image)) { ?>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <label>Meta Imagem Atual</label>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 position-relative">
                            <a href="/files/Seos/meta_image/site-<?php echo h($receitacategoria->seo->meta_image); ?>"
                               data-fancybox="gallery" title="Visualizar Imagem">
                                <?php echo $this->Html->image('/files/Seos/meta_image/img-' . $receitacategoria->seo->meta_image, [
                                    'class' => 'img-responsive painel',
                                ]); ?>
                            </a>
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
            <?php } ?>
            <?php if (!empty($receita->seo->meta_image)) { ?>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <label>Meta Imagem Atual</label>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 position-relative">
                            <a href="/files/Seos/meta_image/site-<?php echo h($receita->seo->meta_image); ?>"
                               data-fancybox="gallery" title="Visualizar Imagem">
                                <?php echo $this->Html->image('/files/Seos/meta_image/img-' . $receita->seo->meta_image, [
                                    'class' => 'img-responsive painel',
                                ]); ?>
                            </a>
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
            <?php } ?>
            <?php if (!empty($categoria->seo->meta_image)) { ?>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <label>Meta Imagem Atual</label>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 position-relative">
                            <a href="/files/Seos/meta_image/site-<?php echo h($categoria->seo->meta_image); ?>"
                               data-fancybox="gallery" title="Visualizar Imagem">
                                <?php echo $this->Html->image('/files/Seos/meta_image/img-' . $categoria->seo->meta_image, [
                                    'class' => 'img-responsive painel',
                                ]); ?>
                            </a>
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
            <?php } ?>
            <?php if (!empty($post->seo->meta_image)) { ?>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <label>Meta Imagem Atual</label>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 position-relative">
                            <a href="/files/Seos/meta_image/site-<?php echo h($post->seo->meta_image); ?>"
                               data-fancybox="gallery" title="Visualizar Imagem">
                                <?php echo $this->Html->image('/files/Seos/meta_image/img-' . $post->seo->meta_image, [
                                    'class' => 'img-responsive painel',
                                ]); ?>
                            </a>
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
            <?php } ?>
            <?php if (!empty($pagina->seo->meta_image)) { ?>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <label>Meta Imagem Atual</label>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 position-relative">
                            <a href="/files/Seos/meta_image/site-<?php echo h($pagina->seo->meta_image); ?>"
                               data-fancybox="gallery" title="Visualizar Imagem">
                                <?php echo $this->Html->image('/files/Seos/meta_image/img-' . $pagina->seo->meta_image, [
                                    'class' => 'img-responsive painel',
                                ]); ?>
                            </a>
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
            <?php } ?>
            <?php if (!empty($secundariopagina->seo->meta_image)) { ?>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <label>Meta Imagem Atual</label>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 position-relative">
                            <a href="/files/Seos/meta_image/site-<?php echo h($secundariopagina->seo->meta_image); ?>"
                               data-fancybox="gallery" title="Visualizar Imagem">
                                <?php echo $this->Html->image('/files/Seos/meta_image/img-' . $secundariopagina->seo->meta_image, [
                                    'class' => 'img-responsive painel',
                                ]); ?>
                            </a>
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
