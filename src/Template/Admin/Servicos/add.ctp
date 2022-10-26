<section class="content-header">
    <h1>
        Servico
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
                <?php echo $this->Form->create($servico, ['type' => 'file']); ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->input('categoriaservicos_id', ['options' => $categoriaservicos]);
                    echo $this->Form->input('titulo');
                    echo $this->Form->input('icone', [
                        'label' => 'Icone',
                        'class' => 'form-control icp icp-auto',
                        'value' => 'fas fa-anchor',
                        'type' => 'text',
                        'data-placement' => 'bottomRight'
                    ]);
                    echo $this->Form->input('descricao');
                    echo $this->Form->input('imagem', ['label' => 'Imagem', 'type' => 'file']);
                    ?>
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
