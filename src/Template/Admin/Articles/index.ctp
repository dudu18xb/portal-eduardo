<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Articles
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
                    <h3 class="box-title"><?= __('Lista de') ?> Articles</h3>
                    <div class="box-tools">
                        <?php echo $this->Form->create(null, ['valueSources' => 'articles']); ?>
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
                            <th><?= $this->Paginator->sort('category_id', 'Categoria') ?></th>
                            <th><?= $this->Paginator->sort('author_id', 'Autor') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th><?= $this->Paginator->sort('title', 'Título') ?></th>
                            <th><?= __('Ações') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($articles as $article): ?>
                            <tr>
                                <td><?= $this->Number->format($article->id) ?></td>
                                <td><?= $article->has('category') ? $this->Html->link($article->category->title, ['controller' => 'Categories', 'action' => 'view', $article->category->id]) : '' ?></td>
                                <td><?= $article->has('author') ? $this->Html->link($article->author->title, ['controller' => 'Authors', 'action' => 'view', $article->author->id]) : '' ?></td>
                                <td><?= $article->status ? __('<span class="ativo btn btn-success btn-sm">Ativo</span>') : __('<span class="inativo btn btn-danger btn-sm">Inativo</span>'); ?></td>
                                <td><?= h($article->title) ?></td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $article->id], ['class' => 'btn btn-info btn-sm']) ?>
                                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $article->id], ['class' => 'btn btn-warning btn-sm']) ?>
                                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $article->id], ['confirm' => __('Confirm to delete this entry?'), 'class' => 'btn btn-danger btn-sm']) ?>
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
