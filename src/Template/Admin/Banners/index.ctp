<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Banners
        <div
            class="pull-right"><?= $this->Html->link(__('Novo'), ['action' => 'add'], ['class' => 'btn btn-success btn-sm']) ?></div>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Lista de') ?> Banners</h3>
                    <div class="box-tools">
                        <?php echo $this->Form->create(null, ['valueSources' => 'banners']); ?>
                        <div class="input-group input-group-sm" style="width: 320px;">
                            <?php echo $this->Form->control('q', ['label' => false, 'placeholder' => 'Pesquisar por título', 'class' => 'form-control']); ?>
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-flat" type="submit">Buscar</button>
                                    <?php echo $this->Form->button('Limpar', ['action' => 'index', ['class' => 'btn btn-sucess btn-flat']]); ?>

                                </span>
                        </div>
                        <?php echo $this->Form->end(); ?>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th><?= $this->Paginator->sort('title','Título') ?></th>
                            <th><?= $this->Paginator->sort('position','Posição') ?></th>
                            <th><?= __('Ações') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($banners as $banner): ?>
                            <tr>
                                <td><?= $this->Number->format($banner->id) ?></td>
                                <td><?= $banner->status ? __('<span class="ativo btn btn-success btn-sm">Ativo</span>') : __('<span class="inativo btn btn-danger btn-sm">Inativo</span>'); ?></td>
                                <td><?= h($banner->title) ?></td>
                                <td><span class="btn btn-sm btn-sm"><?= h($positions[$banner->position]) ?></span></td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $banner->id], ['class' => 'btn btn-info btn-sm']) ?>
                                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $banner->id], ['class' => 'btn btn-warning btn-sm']) ?>
                                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $banner->id], ['confirm' => __('Confirm to delete this entry?'), 'class' => 'btn btn-danger btn-sm']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <?php echo $this->Paginator->numbers(); ?>
                    </ul>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<!-- /.content -->
