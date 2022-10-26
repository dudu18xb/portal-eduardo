<?php

use Cake\Routing\Router;

?>
<section class="content-header">
    <h1>
        Blog
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
                    <a href="<?php echo Router::url(['controller' => 'Fotos', 'action' => 'addblog',$blog->id]); ?>" title="Adicionar Galeria de Imagens" class="btn-photo"><i class="fa fa-picture-o" aria-hidden="true"></i> Adicionar Galeria de Imagens</a>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo $this->Form->create($blog, ['type' => 'file']); ?>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php echo $this->Form->input('status'); ?>
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
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->control('capa', ['label' => 'Capa', 'type' => 'file']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->control('imagemdescricao', ['label' => 'Imagem Descrição', 'type' => 'file']); ?>
                        </div>
                        <?php if(!empty($blog->capa)){ ?>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="control-label">Capa Atual</label>
                                <a href="/files/Blogs/capa/<?php echo $blog->capa; ?>"
                                   data-fancybox="images" data-caption="Imagem Background Valores"
                                   title="Visualizar Imagem Background Valores">
                                    <img src="/files/Blogs/capa/<?php echo $blog->capa; ?>"
                                         alt='Imagem Background Valores' class='img-view'>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(!empty($blog->imagemdescricao)){ ?>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="control-label">Imagem descrição atual</label>
                                <a href="/files/Blogs/imagemdescricao/<?php echo $blog->imagemdescricao; ?>"
                                   data-fancybox="images" data-caption="Imagem Background Valores"
                                   title="Visualizar Imagem Background Valores">
                                    <img src="/files/Blogs/imagemdescricao/<?php echo $blog->imagemdescricao; ?>"
                                         alt='Imagem Background Valores' class='img-view'>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php echo $this->Form->input('slug', ['type' => 'hidden']); ?>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->input('keywords', ['label' => 'Meta Description', 'placeholder' => 'Max: 160 caracteres','required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->input('description', ['label' => 'Meta Keywords', 'placeholder' => 'Max: 12 palavras separados por vírgula','required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->control('meta_image', ['label' => 'Meta Imagem', 'type' => 'file','required' => false]); ?>
                        </div>
                        <?php if(!empty($blog->meta_image)){ ?>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Meta de Imagem descrição atual</label>
                                    <a href="/files/Blogs/meta_image/<?php echo $blog->meta_image; ?>"
                                       data-fancybox="images" data-caption="Imagem"
                                       title="Visualizar Imagem">
                                        <img src="/files/Blogs/meta_image/<?php echo $blog->meta_image; ?>"
                                             alt='Imagem' class='img-view'>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
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
