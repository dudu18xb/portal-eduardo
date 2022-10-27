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
 * @var boolean $isSearch
 */
?>
    <tr>
        <th class="col-xs-4 col-sm-4 col-md-3 col-lg-3"
            scope="row"><?php echo __('Meta Título') ?></th>
        <td class="col-xs-8 col-sm-8 col-md-9 col-lg-9">
            <?php echo h($seo->meta_title); ?>
        </td>
    </tr>
    <tr>
        <th class="col-xs-4 col-sm-4 col-md-3 col-lg-3"
            scope="row"><?php echo __('Meta Descrição') ?></th>
        <td class="col-xs-8 col-sm-8 col-md-9 col-lg-9">
            <?php echo h($seo->meta_description); ?>
        </td>
    </tr>
    <tr>
        <th class="col-xs-4 col-sm-4 col-md-3 col-lg-3"
            scope="row"><?php echo __('Meta Palavras Chaves') ?></th>
        <td class="col-xs-8 col-sm-8 col-md-9 col-lg-9">
            <?php echo h($seo->meta_keywords); ?>
        </td>
    </tr>
<?php if (!empty($seo->meta_image)) { ?>
    <tr>
        <th class="col-xs-4 col-sm-4 col-md-3 col-lg-3"
            scope="row"><?php echo __('Meta Imagem'); ?></th>
        <td class="col-xs-8 col-sm-8 col-md-9 col-lg-9">
            <div class="w-100 float-left">
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 pd-0">
                    <a href="/files/Seos/meta_image/site-<?php echo h($seo->meta_image); ?>"
                       data-fancybox="gallery" title="Visualizar Imagem">
                        <?php echo $this->Html->image('/files/Seos/meta_image/img-' . $seo->meta_image, [
                            'class' => 'img-responsive painel',
                        ]); ?>
                    </a>
                </div>
            </div>
        </td>
    </tr>
<?php } ?>
