<section class="content-header">
    <h1>
        Equipe
        <small><?= __('Editar') ?></small>
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
                <?php echo $this->Form->create($equipe, ['type' => 'file']); ?>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php echo $this->Form->input('status',['type' => 'checkbox']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <?php echo $this->Form->input('nome',['required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <?php echo $this->Form->control('imagem', ['label' => 'Imagem', 'type' => 'file']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <?php echo $this->Form->input('cargo',['required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="control-label">Imagem Atual</label>
                                <a href="/files/Equipes/imagem/<?php echo $equipe->imagem; ?>" data-fancybox="images" data-caption="<?= h($equipe->nome) ?>">
                                    <img src="/files/Equipes/imagem/<?php echo $equipe->imagem; ?>"
                                         alt='<?= h($equipe->nome) ?>' class='img-view'>
                                </a>
                            </div>
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

