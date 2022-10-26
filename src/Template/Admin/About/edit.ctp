<?php

use Cake\Routing\Router;

?>
<section class="content-header">
    <h1>
        Institucional
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
                    <a href="<?php echo Router::url(['controller' => 'Fotos', 'action' => 'addabout',$about->id]); ?>" title="Adicionar Galeria de Imagens" class="btn-photo"><i class="fa fa-picture-o" aria-hidden="true"></i> Adicionar Galeria de Imagens</a>
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
                            <?php echo $this->Form->input('descricao', ['class' => 'sizetextarea', 'required' => true]); ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12"><br></div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php echo $this->Form->input('imagem', ['label' => 'Imagem', 'type' => 'file']); ?>
                        </div>
                        <?php if(!empty($about->imagem)){ ?>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group">
                                <label class="control-label">Imagem Atual</label>
                                <a href="/files/About/imagem/<?php echo $about->imagem; ?>" data-fancybox="images"
                                   data-caption="Imagem atual" title="Visualizar Imagem atual">
                                    <img src="/files/About/imagem/<?php echo $about->imagem; ?>"
                                         alt='Imagem atual' class='img-view'>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <?php echo $this->Form->input('missao', ['class' => 'sizetextarea']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <?php echo $this->Form->input('visao', ['class' => 'sizetextarea']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <?php echo $this->Form->input('valores', ['class' => 'sizetextarea']); ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12"><br></div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <?php echo $this->Form->input('bg_topo', ['label' => 'Background Topo', 'type' => 'file']); ?>
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
                        <?php if(!empty($about->bg_topo)){ ?>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group">
                                <label class="control-label">Background Topo</label>
                                <a href="/files/About/bg_topo/<?php echo $about->bg_topo; ?>" data-fancybox="images"
                                   data-caption="Imagem Background Topo" title="Visualizar Imagem Background Topo">
                                    <img src="/files/About/bg_topo/<?php echo $about->bg_topo; ?>"
                                         alt='Imagem Background Topo' class='img-view'>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(!empty($about->bg_visao)){ ?>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group">
                                <label class="control-label">Background Visão</label>
                                <a href="/files/About/bg_visao/<?php echo $about->bg_visao; ?>" data-fancybox="images"
                                   data-caption="Imagem Background Visão" title="Visualizar Imagem Background Visão">
                                    <img src="/files/About/bg_visao/<?php echo $about->bg_visao; ?>"
                                         alt='Imagem Background Visão' class='img-view'>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(!empty($about->bg_missao)){ ?>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group">
                                <label class="control-label">Background Missão</label>
                                <a href="/files/About/bg_missao/<?php echo $about->bg_missao; ?>" data-fancybox="images"
                                   data-caption="Imagem Background Missão" title="Visualizar Imagem Background Missão">
                                    <img src="/files/About/bg_missao/<?php echo $about->bg_missao; ?>"
                                         alt='Imagem Background Missão' class='img-view'>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(!empty($about->bg_valores)){ ?>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group">
                                <label class="control-label">Background Valores</label>
                                <a href="/files/About/bg_valores/<?php echo $about->bg_valores; ?>"
                                   data-fancybox="images" data-caption="Imagem Background Valores"
                                   title="Visualizar Imagem Background Valores">
                                    <img src="/files/About/bg_valores/<?php echo $about->bg_valores; ?>"
                                         alt='Imagem Background Valores' class='img-view'>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
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

<style>
    .sizetextarea{
        width: 100%;
        height: 235px;
        resize: none;
    }
    .img-view{
        width: 100%;
    }
    .btn-photo{
        float: right;
        background-color: #158e67;
        padding: 10px 15px;
        color: #fff;
        border-radius: 5px;
    }
    .btn-photo:hover,.btn-photo:focus,.btn-photo:active{
        background-color: #085f43;
        color: #fff;
        border-radius: 5px;
        transition: 0.3s;
    }

</style>
