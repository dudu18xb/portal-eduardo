<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Categoria Serviços
      <div class="pull-right"><?= $this->Html->link('<i class="fa fa-plus"></i> ' . __('Novo'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-success text-white']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Lista de') ?> Categoria Serviço</h3>
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
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($categoriaservicos as $categoriaservico): ?>
              <tr>
                <td><?= $this->Number->format($categoriaservico->id) ?></td>
                <td><?= h($categoriaservico->titulo) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $categoriaservico->id], ['class'=>'btn btn-info']) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $categoriaservico->id], ['class'=>'btn btn-warning']) ?>
                  <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $categoriaservico->id], ['confirm' => __('Deseja mesmo Excluir?'), 'class'=>'btn btn-danger']) ?>
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
