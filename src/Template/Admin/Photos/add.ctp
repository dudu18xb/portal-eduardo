<section class="content-header">
  <h1>
    Photo
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Voltar'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Formulário') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
          <?php echo $this->Form->create($photo, ['type' => 'file','role' => 'form']); ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('page_id', ['options' => $pages, 'empty' => true]);
            echo $this->Form->input('article_id', ['options' => $articles, 'empty' => true]);
            echo $this->Form->input('status');
            echo $this->Form->input('title');
            echo $this->Form->input('image');
            echo $this->Form->input('description');
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Salvar')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

