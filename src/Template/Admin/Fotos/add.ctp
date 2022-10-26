<section class="content-header">
    <h1>
        Foto
        <small><?= __('Add') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Voltar'), ['action' => 'index'], ['escape' => false]) ?>
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Formulário') ?></h3>
                </div>
                <?php echo $this->Form->create($foto, ['type' => 'file']); ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->input('status',['checked' => true]);
                    echo $this->Form->input('descricao');
                    echo $this->Form->input('blog_id', ['options' => $blogs, 'empty' => 'Selecione...']);
                    echo $this->Form->input('about_id', ['options' => $about, 'empty' => 'Selecione...']);
                    ?>
                    <?php echo $this->Form->control('imagem', ['label' => 'Imagem', 'type' => 'file', 'required' => true]); ?>
                </div>
                <div class="box-footer">
                    <?= $this->Form->button(__('Salvar')) ?>
                </div>
                <?php echo $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>

