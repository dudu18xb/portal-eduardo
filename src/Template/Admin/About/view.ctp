<section class="content-header">
    <h1>
        <?php echo __('Institucional'); ?>
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
                        <dt><?= __('Status') ?></dt>
                        <dd>
                            <?= $about->status ? __('<span class="ativo btn btn-success btn-xs">Ativo</span>') : __('<span class="inativo btn btn-danger btn-xs">Inativo</span>'); ?>
                        </dd>
                        <?php if(!empty($about->imagem)){ ?>
                        <dt><?= __('Imagem') ?></dt>
                        <dd>
                            <a href="/files/About/imagem/<?php echo $about->imagem; ?>" data-fancybox="images"
                               data-caption="Imagem atual" title="Visualizar Imagem atual">
                                <img src="/files/About/imagem/<?php echo $about->imagem; ?>"
                                     alt='Imagem atual' class='img-thumb'>
                            </a>
                        </dd>
                        <?php } ?>
                        <br>
                        <br>
                        <?php if(!empty($about->bg_topo)){ ?>
                        <dt><?= __('Background Imagem Topo') ?></dt>
                        <dd>
                            <a href="/files/About/bg_topo/<?php echo $about->bg_topo; ?>" data-fancybox="images"
                               data-caption="Imagem Background Topo" title="Visualizar Imagem Background Topo">
                                <img src="/files/About/bg_topo/<?php echo $about->bg_topo; ?>"
                                     alt='Imagem Background Topo' class='img-thumb'>
                            </a>
                        </dd>
                        <?php } ?>
                        <br>
                        <br>
                        <?php if(!empty($about->bg_visao)){ ?>
                        <dt><?= __('Background Imagem Visao') ?></dt>
                        <dd>
                            <a href="/files/About/bg_visao/<?php echo $about->bg_visao; ?>" data-fancybox="images"
                               data-caption="Imagem Background Visão" title="Visualizar Imagem Background Visão">
                                <img src="/files/About/bg_visao/<?php echo $about->bg_visao; ?>"
                                     alt='Imagem Background Visão' class='img-thumb'>
                            </a>
                        </dd>
                        <?php } ?>
                        <br>
                        <?php if(!empty($about->bg_missao)){ ?>
                        <dt><?= __('Background Imagem Missão') ?></dt>
                        <dd>
                            <img src="/files/About/bg_missao/<?php echo $about->bg_missao; ?>"
                                 alt='Background Imagem Missão' class='img-thumb'>
                        </dd>
                        <?php } ?>
                        <br>
                        <?php if(!empty($about->bg_valores)){ ?>
                        <dt><?= __('Background Imagem Valores') ?></dt>
                        <dd>
                            <a href="/files/About/bg_missao/<?php echo $about->bg_missao; ?>" data-fancybox="images"
                               data-caption="Imagem Background Missão" title="Visualizar Imagem Background Missão">
                                <img src="/files/About/bg_missao/<?php echo $about->bg_missao; ?>"
                                     alt='Imagem Background Missão' class='img-thumb'>
                            </a>
                        </dd>
                        <?php } ?>


                        <dt><?= __('Diastrabalhados') ?></dt>
                        <dd>
                            <?= $this->Number->format($about->diastrabalhados) ?>
                        </dd>
                        <dt><?= __('Pacientesatendidos') ?></dt>
                        <dd>
                            <?= $this->Number->format($about->pacientesatendidos) ?>
                        </dd>


                        <dt><?= __('Descricao') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($about->descricao)); ?>
                        </dd>
                        <dt><?= __('Missao') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($about->missao)); ?>
                        </dd>
                        <dt><?= __('Visao') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($about->visao)); ?>
                        </dd>
                        <dt><?= __('Valores') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($about->valores)); ?>
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

