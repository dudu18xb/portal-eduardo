<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Fotos
    <div class="pull-right"><?= $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Lista de') ?> Fotos</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filtro') ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('blog_id') ?></th>
                <th><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($fotos as $foto): ?>
              <tr>
                <td><?= $this->Number->format($foto->id) ?></td>
                <td><?= h($foto->status) ?></td>
                <td><?= h($foto->descricao) ?></td>
                <td><?= $foto->has('blog') ? $this->Html->link($foto->blog->titulo, ['controller' => 'Blogs', 'action' => 'view', $foto->blog->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $foto->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $foto->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $foto->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
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
