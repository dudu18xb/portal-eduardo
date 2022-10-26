<section class="content-header">
    <h1>
        Blog
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
                <?php echo $this->Form->create($blog, ['type' => 'file']); ?>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php echo $this->Form->input('status',['checked' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->input('autores_id', ['options' => $autores, 'required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->input('categoria_id', ['options' => $categorias, 'required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <?php echo $this->Form->input('titulo', ['required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <?php echo $this->Form->input('data', ['empty' => true, 'default' => '', 'class' => 'datepicker form-control', 'type' => 'text','required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php echo $this->Ck->input('descricao',['required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php echo $this->Form->control('capa', ['label' => 'Capa', 'type' => 'file','required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php echo $this->Form->control('imagemdescricao', ['label' => 'Imagem Descrição', 'type' => 'file']); ?>
                        </div>
                        <?php echo $this->Form->input('slug', ['type' => 'hidden']); ?>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->input('keywords', ['label' => 'Meta Description', 'placeholder' => 'Max: 160 caracteres','required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->input('description', ['label' => 'Meta Keywords', 'placeholder' => 'Max: 12 palavras separados por vírgula','required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->control('meta_image', ['label' => 'Meta Imagem', 'type' => 'file','required' => true]); ?>
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

<?php
$this->Html->css([
    'AdminLTE./plugins/datepicker/datepicker3',
],
    ['block' => 'css']);

$this->Html->script([
    'AdminLTE./plugins/input-mask/jquery.inputmask',
    'AdminLTE./plugins/input-mask/jquery.inputmask.date.extensions',
    'AdminLTE./plugins/datepicker/bootstrap-datepicker',
    'AdminLTE./plugins/datepicker/locales/bootstrap-datepicker.pt-BR',
],
    ['block' => 'script']);
?>
<?php $this->start('scriptBottom'); ?>
<script>
    $(function () {
        //Datemask dd/mm/yyyy
        $(".datepicker")
            .inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"})
            .datepicker({
                language: 'br',
                format: 'dd/mm/yyyy'
            });

    });
</script>
<?php $this->end(); ?>
