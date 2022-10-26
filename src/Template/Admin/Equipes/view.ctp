<section class="content-header">
    <h1>
        <?php echo __('Equipe'); ?>
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
                            <?= $equipe->status ? __('<span class="ativo btn btn-success btn-xs">Ativo</span>') : __('<span class="inativo btn btn-danger btn-xs">Inativo</span>'); ?>
                        </dd>
                        <dt><?= __('Nome') ?></dt>
                        <dd>
                            <?= h($equipe->nome) ?>
                        </dd>
                        <dt><?= __('Imagem') ?></dt>
                        <dd>
                            <a href="/files/Equipes/imagem/<?php echo $equipe->imagem; ?>" data-fancybox="images" data-caption="<?= h($equipe->nome) ?>">
                                <img src="/files/Equipes/imagem/<?php echo $equipe->imagem; ?>"
                                     alt='<?= h($equipe->nome) ?>' class='img-thumb'>
                            </a>
                        </dd>
                        <dt><?= __('Cargo') ?></dt>
                        <dd>
                            <?= h($equipe->cargo) ?>
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
