<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Institucional
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th><?= $this->Paginator->sort('descricao', ['Label' => 'Descrição']) ?></th>
                            <th><?= $this->Paginator->sort('created', ['label' => 'Criado em']) ?></th>
                            <th><?= $this->Paginator->sort('modified', ['label' => 'Modificado em']) ?></th>
                            <th><?= __('Ações') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($about as $about): ?>
                            <tr>
                                <td><?= $this->Number->format($about->id) ?></td>
                                <td><?= $about->status ? __('<span class="ativo btn btn-success btn-xs">Ativo</span>') : __('<span class="inativo btn btn-danger btn-xs">Inativo</span>'); ?></td>
                                <td><?= h($about->id) ?><?php echo strip_tags(substr($about->descricao,0,50)); ?></td>
                                <td><?= h($about->created) ?></td>
                                <td><?= h($about->modified) ?></td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $about->id], ['class' => 'btn btn-info']) ?>
                                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $about->id], ['class' => 'btn btn-warning']) ?>
                                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $about->id], ['confirm' => __('Deseja mesmo Excluir?'), 'class' => 'btn btn-danger']) ?>
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
