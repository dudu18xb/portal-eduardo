<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Pages
    <div class="pull-right"><?= $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-success btn-sm']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Lista de') ?> Pages</h3>
            <div class="box-tools">
                <?php echo $this->Form->create(null, ['valueSources' => 'pages']); ?>
                <div class="input-group input-group-sm" style="width: 320px;">
                    <?php echo $this->Form->control('q', ['label' => false,'placeholder' =>'Pesquisar por título','class' => 'form-control']); ?>
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
                <th><?= $this->Paginator->sort('type','Tipo') ?></th>
                <th><?= $this->Paginator->sort('url_custom') ?></th>
                <th><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($pages as $page): ?>
              <tr>
                <td><?= $this->Number->format($page->id) ?></td>
                <td><?= $page->status ? __('<span class="ativo btn btn-success btn-sm">Ativo</span>') : __('<span class="inativo btn btn-danger btn-sm">Inativo</span>'); ?></td>
                <td><?= h($page->title) ?></td>
                <td><?= h($page->type) ?></td>
                <td><?= h($page->url_custom) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $page->id], ['class'=>'btn btn-info btn-sm']) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $page->id], ['class'=>'btn btn-warning btn-sm']) ?>
                  <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $page->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-sm']) ?>
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
