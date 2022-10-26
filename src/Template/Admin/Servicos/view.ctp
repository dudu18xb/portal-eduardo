<section class="content-header">
    <h1>
        <?php echo __('Serviço'); ?>
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
                        <dt><?= __('Categoriaservico') ?></dt>
                        <dd>
                            <?= $servico->has('Categoria Serviços') ? $servico->categoriaservico->id : '' ?>
                        </dd>
                        <dt><?= __('Titulo') ?></dt>
                        <dd>
                            <?= h($servico->titulo) ?>
                        </dd>
                        <dt><?= __('Icone') ?></dt>
                        <dd>
                            <?= h($servico->icone) ?>
                        </dd>
                        <dt><?= __('Descricao') ?></dt>
                        <dd>
                            <?= h($servico->descricao) ?>
                        </dd>
                        <dt><?= __('Imagem') ?></dt>
                        <dd>
                            <img src="/files/Servicos/imagem/<?php echo $servico->imagem; ?>"
                                 alt='<?= h($servico->titulo) ?>' class='img-thumb'>
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

