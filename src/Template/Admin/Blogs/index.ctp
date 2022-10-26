<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Blogs
        <div class="pull-right"><?= $this->Html->link('<i class="fa fa-plus"></i> ' . __('Novo'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-success text-white']) ?></div>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Lista de') ?> Blogs</h3>
                    <div class="box-tools">
                        <?php echo $this->Form->create(null, ['valueSources' => 'blogs']); ?>
                        <div class="input-group input-group-sm" style="width: 320px;">
                            <?php echo $this->Form->control('q', ['label' => false,'placeholder' =>'Pesquisar por titulo','class' => 'form-control']); ?>
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
                            <th><?= $this->Paginator->sort('autores_id') ?></th>
                            <th><?= $this->Paginator->sort('titulo') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th><?= $this->Paginator->sort('data') ?></th>
                            <th><?= $this->Paginator->sort('created', ['label' => 'Criado em']) ?></th>
                            <th><?= $this->Paginator->sort('modified', ['label' => 'Modificado em']) ?></th>
                            <th><?= __('Ações') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($blogs as $blog): ?>
                            <tr>
                                <td><?= $this->Number->format($blog->id) ?></td>
                                <td><?= h($blog->autore->nome) ?></td>
                                <td><?php echo strip_tags(substr($blog->titulo,0,50)); ?></td>
                                <td><?= $blog->status ? __('<span class="ativo btn btn-success btn-xs">Ativo</span>') : __('<span class="inativo btn btn-danger btn-xs">Inativo</span>'); ?></td>
                                <td><?= h($blog->data) ?></td>
                                <td><?= h($blog->created) ?></td>
                                <td><?= h($blog->modified) ?></td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $blog->id], ['class' => 'btn btn-info']) ?>
                                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $blog->id], ['class' => 'btn btn-warning']) ?>
                                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $blog->id], ['confirm' => __('Deseja mesmo Excluir?'), 'class' => 'btn btn-danger']) ?>
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