<section class="content-header">
    <h1>
        Foto
        <small><?= __('Edit') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-arrow-left"></i> ' . __('Voltar'), ['controller'=> 'Fotos','action' => 'addblog',$idabout], ['escape' => false, 'class' => 'btn btn-danger text-white btn-sm']) ?>
        </li>
    </ol>
</section>

<!-- Main content -->
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
                    echo $this->Form->input('status');
                    echo $this->Form->input('descricao');
                    ?>
                    <?php echo $this->Form->control('imagem', ['label' => 'Imagem', 'type' => 'file', 'required' => false]); ?>
                    <?php if(!empty($foto->imagem)){ ?>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group">
                                <label class="control-label">Imagem Atual</label>
                                <a href="/files/Fotos/imagem/<?php echo $foto->imagem; ?>" data-fancybox="images"
                                   data-caption="Imagem atual" title="Visualizar Imagem atual">
                                    <img src="/files/Fotos/imagem/<?php echo $foto->imagem; ?>"
                                         alt='Imagem atual' class='img-view'>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="box-footer">
                    <?= $this->Form->button(__('Salvar')) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
<style>
    img{
        width: 90px;
        height: 90px;
        object-fit: contain;
        object-position: center;
    }
</style>


