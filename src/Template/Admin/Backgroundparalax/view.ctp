<section class="content-header">
    <h1>
        <?php echo __('Background'); ?>
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
                            <?php echo $backgroundparalax->status ? __('<span class="ativo btn btn-success btn-xs">Ativo</span>') : __('<span class="inativo btn btn-danger btn-xs">Inativo</span>'); ?>
                        </dd>
                        <dt><?= __('Titulo') ?></dt>
                        <dd>
                            <?= h($backgroundparalax->titulo) ?>
                        </dd>
                        <dt><?= __('Sub Titulo') ?></dt>
                        <dd>
                            <?= h($backgroundparalax->sub_titulo) ?>
                        </dd>
                        <dt><?= __('Texto botão') ?></dt>
                        <dd>
                            <?= h($backgroundparalax->texto_botao) ?>
                        </dd>
                        <dt><?= __('Url') ?></dt>
                        <dd>
                            <?= h($backgroundparalax->url) ?>
                        </dd>

                        <?php if (!empty($backgroundparalax->imagem)) { ?>
                            <dt><?= __('Imagem') ?></dt>
                            <dd>
                                <a href="/files/Backgroundparalax/imagem/<?php echo $backgroundparalax->imagem; ?>"
                                   data-fancybox="images" data-caption="<?= h($backgroundparalax->titulo) ?>"
                                   title="Visualizar imagem de <?= h($backgroundparalax->titulo) ?>">
                                    <img src="/files/Backgroundparalax/imagem/<?php echo $backgroundparalax->imagem; ?>"
                                         alt='<?= h($backgroundparalax->titulo) ?>' class='img-thumb'>
                                </a>
                            </dd>
                        <?php } ?>


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
