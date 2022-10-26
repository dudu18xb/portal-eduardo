<section class="content-header">
    <h1>
        Fotos
        <small><?= __('Adicionar') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-arrow-left"></i> ' . __('Voltar'), ['controller'=> 'About','action' => 'edit',$idabout], ['escape' => false, 'class' => 'btn btn-danger text-white btn-sm']) ?>
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
<?php if(!empty($fotoblogs)){ ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                    <h3 class="box-title"><?php echo __('Fotos'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Galeria de Imagens</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <?php foreach ($fotoblogs as $fotoblog){ ?>
                                    <tbody>
                                    <tr>
                                        <th>id</th>
                                        <th>status</th>
                                        <th>descricao</th>
                                        <th>Imagem</th>
                                        <th>Ações</th>
                                    </tr>
                                    <tr>
                                        <td><?= h($fotoblog->id) ?></td>
                                        <td><?= $fotoblog->status ? __('<span class="ativo btn btn-success btn-xs">Ativo</span>') : __('<span class="inativo btn btn-danger btn-xs">Inativo</span>'); ?></td>
                                        <td><?= h($fotoblog->descricao) ?></td>
                                        <td>
                                            <a href="/files/Fotos/imagem/<?php echo $fotoblog->imagem; ?>" data-fancybox="images"
                                               data-caption="<?= h($fotoblog->descricao) ?>">
                                                <img src="/files/Fotos/imagem/<?php echo $fotoblog->imagem; ?>"
                                                     alt='<?= h($fotoblog->$fotoblog) ?>' class='img-thumb'>
                                            </a>
                                        </td>
                                        <td class="actions" style="white-space:nowrap">
                                            <?= $this->Html->link(__('Editar'), ['action' => 'editabout',$idabout, $fotoblog->id], ['class'=>'btn btn-warning btn-xs']) ?>
                                            <?= $this->Form->postLink(__('Excluir'), ['action' => 'deleteabout',$idabout, $fotoblog->id], ['confirm' => __('Deseja mesmo Excluir'), 'class'=>'btn btn-danger btn-xs']) ?>
                                        </td>
                                    </tr>
                                    </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<style>
    img{
        width: 90px;
        height: 90px;
        object-fit: contain;
        object-position: center;
    }
</style>
