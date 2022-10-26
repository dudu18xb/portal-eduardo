<section class="content-header">
    <h1>
        <?php echo __('Banner'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-arrow-left"></i> ' . __('Voltar'), ['action' => 'index'], ['escape' => false, 'class' => 'btn btn-danger text-white btn-sm']) ?>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-info"></i>
                    <h3 class="box-title"><?php echo __('Informações'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt><?= __('Status') ?></dt>
                        <dd>
                            <?= $banner->status ? __('<span class="ativo btn btn-success btn-xs">Ativo</span>') : __('<span class="inativo btn btn-danger btn-xs">Inativo</span>'); ?>
                        </dd>
                        <dt><?= __('Titulo') ?></dt>
                        <dd>
                            <?= h($banner->titulo) ?>
                        </dd>
                        <?php if(!empty($banner->imagem)){ ?>
                        <dt><?= __('Imagem') ?></dt>
                        <dd>
                            <a href="/files/Banners/imagem/<?php echo $banner->imagem; ?>" data-fancybox="images" data-caption="<?= h($banner->titulo) ?>" title="Visualizar imagem de <?= h($banner->titulo) ?>">
                                <img src="/files/Banners/imagem/<?php echo $banner->imagem; ?>"
                                     alt='<?= h($banner->titulo) ?>' class='img-thumb'>
                            </a>
                        </dd>
                        <?php } ?>
                        <dt><?= __('Link') ?></dt>
                        <dd>
                            <?= h($banner->link) ?>
                        </dd>
                        <dt><?= __('Texto Botao') ?></dt>
                        <dd>
                            <?= h($banner->texto_botao) ?>
                        </dd>

                        <dt><?= __('Sub Titulo') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($banner->sub_titulo)); ?>
                        </dd>
                    </dl>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
    <!-- div -->

</section>
