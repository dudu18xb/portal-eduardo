<section class="content-header">
    <h1>
        <?php echo __('Blog'); ?>
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
                        <dt><?= __('Autore') ?></dt>
                        <dd>
                            <?= $blog->has('autore') ? $blog->autore->id : '' ?>
                        </dd>
                        <dt><?= __('Status') ?></dt>
                        <dd>
                            <?= $blog->status ? __('<span class="ativo btn btn-success btn-xs">Ativo</span>') : __('<span class="inativo btn btn-danger btn-xs">Inativo</span>'); ?>
                        </dd>
                        <dt><?= __('Titulo') ?></dt>
                        <dd>
                            <?= h($blog->titulo) ?>
                        </dd>
                        <?php if (!empty($blog->imagemdescricao)) { ?>
                            <dt><?= __('Imagem Desxcrição') ?></dt>
                            <dd>
                                <a href="/files/Blogs/imagemdescricao/<?php echo $blog->imagemdescricao; ?>"
                                   data-fancybox="images" data-caption="Imagem Background Valores"
                                   title="Visualizar Imagem Background Valores">
                                    <img src="/files/Blogs/imagemdescricao/<?php echo $blog->imagemdescricao; ?>"
                                         alt='Imagem Background Valores' class='img-thumb'>
                                </a>
                            </dd>
                        <?php } ?>
                        <br>
                        <?php if (!empty($blog->capa)) { ?>
                            <dt><?= __('Capa') ?></dt>
                            <dd>
                                <a href="/files/Blogs/capa/<?php echo $blog->capa; ?>"
                                   data-fancybox="images" data-caption="Imagem Background Valores"
                                   title="Visualizar Imagem Background Valores">
                                    <img src="/files/Blogs/capa/<?php echo $blog->capa; ?>"
                                         alt='Imagem Background Valores' class='img-thumb'>
                                </a>
                            </dd>
                        <?php } ?>
                        <dt><?= __('Slug') ?></dt>
                        <dd>
                            <?= h($blog->slug) ?>
                        </dd>


                        <dt><?= __('Data') ?></dt>
                        <dd>
                            <?= h($blog->data) ?>
                        </dd>
                        <dt><?= __('Meta Description') ?></dt>
                        <dd>
                            <?= h($blog->description) ?>
                        </dd>
                        <dt><?= __('Meta Keywords') ?></dt>
                        <dd>
                            <?= h($blog->keywords) ?>
                        </dd>


                        <dt><?= __('Descricao') ?></dt>
                        <dd>
                            <?= $blog->descricao; ?>
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
