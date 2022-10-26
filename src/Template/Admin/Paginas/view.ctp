<section class="content-header">
    <h1>
        <?php echo __('Pagina'); ?>
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
                        <dt><?= __('Titulo') ?></dt>
                        <dd>
                            <?= h($pagina->titulo) ?>
                        </dd>


                        <dt><?= __('Status') ?></dt>
                        <dd>
                            <?= $pagina->status ? __('<span class="ativo btn btn-success btn-xs">Ativo</span>') : __('<span class="inativo btn btn-danger btn-xs">Inativo</span>'); ?>
                        </dd>
                        <dt><?= __('Meta Description') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($pagina->meta_description)); ?>
                        </dd>
                        <dt><?= __('Meta Keywords') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($pagina->meta_keywords)); ?>
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

