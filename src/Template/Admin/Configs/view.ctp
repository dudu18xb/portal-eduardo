<section class="content-header">
    <h1>
        <?php echo __('Configuração'); ?>
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
                        <dt><?= __('Facebook') ?></dt>
                        <dd>
                            <?= h($config->facebook) ?>
                        </dd>
                        <dt><?= __('Instagram') ?></dt>
                        <dd>
                            <?= h($config->instagram) ?>
                        </dd>
                        <dt><?= __('Twitter') ?></dt>
                        <dd>
                            <?= h($config->twitter) ?>
                        </dd>
                        <dt><?= __('Telefone') ?></dt>
                        <dd>
                            <?= h($config->telefone) ?>
                        </dd>
                        <dt><?= __('Celular') ?></dt>
                        <dd>
                            <?= h($config->celular) ?>
                        </dd>
                        <dt><?= __('Endereco') ?></dt>
                        <dd>
                            <?= h($config->endereco) ?>
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
