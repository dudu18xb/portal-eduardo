<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Contato
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Lista de') ?> Contato</h3>
                    <div class="box-tools">
                        <?php echo $this->Form->create(null, ['valueSources' => 'contato']); ?>
                        <div class="input-group input-group-sm" style="width: 320px;">
                            <?php echo $this->Form->control('q', ['label' => false,'placeholder' =>'Pesquisar por nome','class' => 'form-control']); ?>
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
                            <th><?= $this->Paginator->sort('nome') ?></th>
                            <th><?= $this->Paginator->sort('email') ?></th>
                            <th><?= $this->Paginator->sort('assunto') ?></th>
                            <th><?= __('Ações') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($contato as $contato): ?>
                            <tr>
                                <td><?= $this->Number->format($contato->id) ?></td>
                                <td><?= $contato->status ? __('<span class="ativo btn btn-success btn-xs">Lido</span>') : __('<span class="inativo btn btn-danger btn-xs">Não Lido</span>'); ?></td>
                                <td><?= h($contato->nome) ?></td>
                                <td><?= h($contato->email) ?></td>
                                <td><?= h($contato->assunto) ?></td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $contato->id], ['class' => 'btn btn-info']) ?>
                                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $contato->id], ['confirm' => __('Deseja mesmo Excluir?'), 'class' => 'btn btn-danger']) ?>
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
