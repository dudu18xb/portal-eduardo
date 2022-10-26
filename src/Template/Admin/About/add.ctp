<section class="content-header">
    <h1>
        Institucional
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
                <?php echo $this->Form->create($about, ['type' => 'file']); ?>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php echo $this->Form->input('status'); ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php echo $this->Form->input('descricao',['class' => 'sizetextarea','required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12"><br></div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php echo $this->Form->input('imagem', ['label' => 'Imagem', 'type' => 'file','required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <?php echo $this->Form->input('missao',['class' => 'sizetextarea']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <?php echo $this->Form->input('visao',['class' => 'sizetextarea']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <?php echo $this->Form->input('valores',['class' => 'sizetextarea']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12"><br></div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <?php echo $this->Form->input('bg_topo', ['label' => 'Background Topo', 'type' => 'file','required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <?php echo $this->Form->input('bg_visao', ['label' => 'Background Visão', 'type' => 'file']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <?php echo $this->Form->input('bg_missao', ['label' => 'Background Missão', 'type' => 'file']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <?php echo $this->Form->input('bg_valores', ['label' => 'Background Valores', 'type' => 'file']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->input('diastrabalhados', ['label' => 'Dias Trabalhados', 'placeholder' => 'Informe sómente o número de dias trabalhados', 'type' => 'number']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->input('pacientesatendidos', ['label' => 'Pacientes Atendidos', 'placeholder' => 'Informe sómente o número de pacientes', 'type' => 'number']); ?>
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

