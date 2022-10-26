<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Configuração
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Lista de') ?> Configuração</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('telefone') ?></th>
                <th><?= $this->Paginator->sort('endereco') ?></th>
                <th><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($configs as $config): ?>
              <tr>
                <td><?= $this->Number->format($config->id) ?></td>
                <td><?= h($config->telefone) ?></td>
                <td><?= h($config->endereco) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $config->id], ['class'=>'btn btn-info']) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $config->id], ['class'=>'btn btn-warning']) ?>
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
