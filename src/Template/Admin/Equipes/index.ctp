<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Equipes
        <div class="pull-right"><?= $this->Html->link('<i class="fa fa-plus"></i> ' . __('Novo'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-success text-white']) ?></div>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Lista de') ?> Equipes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('nome') ?></th>
                            <th><?= $this->Paginator->sort('cargo') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th><?= __('Ações') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($equipes as $equipe): ?>
                            <tr>
                                <td><?= $this->Number->format($equipe->id) ?></td>
                                <td><?= h($equipe->nome) ?></td>
                                <td><?= h($equipe->cargo) ?></td>
                                <td><?= $equipe->status ? __('<span class="ativo btn btn-success btn-xs">Ativo</span>') : __('<span class="inativo btn btn-danger btn-xs">Inativo</span>'); ?></td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $equipe->id], ['class' => 'btn btn-info']) ?>
                                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $equipe->id], ['class' => 'btn btn-warning']) ?>
                                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $equipe->id], ['confirm' => __('Deseja mesmo Excluir?'), 'class' => 'btn btn-danger']) ?>
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
