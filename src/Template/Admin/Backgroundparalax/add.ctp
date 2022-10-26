<section class="content-header">
    <h1>
        Background
        <small><?= __('Adicionar') ?></small>
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
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Formulário') ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo $this->Form->create($backgroundparalax, ['type' => 'file']); ?>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php echo $this->Form->input('status'); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->input('titulo',['required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->input('sub_titulo'); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <?php echo $this->Form->input('texto_botao'); ?>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <?php echo $this->Form->input('url',['type' => 'url']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <?php echo $this->Form->control('imagem', ['label' => 'Imagem', 'type' => 'file','required' => true]); ?>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <?= $this->Form->button(__('Salvar')) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>

