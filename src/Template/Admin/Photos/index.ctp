<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Photos
    <div class="pull-right"><?= $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-success btn-sm']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Lista de') ?> Photos</h3>
            <div class="box-tools">
                <?php echo $this->Form->create(null, ['valueSources' => 'photos']); ?>
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
                <th><?= $this->Paginator->sort('page_id','Página') ?></th>
                <th><?= $this->Paginator->sort('article_id', 'Artigos') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('title','Título') ?></th>
                <th><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($photos as $photo): ?>
              <tr>
                <td><?= $this->Number->format($photo->id) ?></td>
                <td><?= $photo->has('page') ? $this->Html->link($photo->page->title, ['controller' => 'Pages', 'action' => 'view', $photo->page->id]) : '' ?></td>
                <td><?= $photo->has('article') ? $this->Html->link($photo->article->title, ['controller' => 'Articles', 'action' => 'view', $photo->article->id]) : '' ?></td>
                <td><?= $photo->status ? __('<span class="ativo btn btn-success btn-sm">Ativo</span>') : __('<span class="inativo btn btn-danger btn-sm">Inativo</span>'); ?></td>
                <td><?= h($photo->title) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $photo->id], ['class'=>'btn btn-info btn-sm']) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $photo->id], ['class'=>'btn btn-warning btn-sm']) ?>
                  <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $photo->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-sm']) ?>
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
