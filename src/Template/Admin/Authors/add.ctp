<section class="content-header">
  <h1>
    Author
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
          <?php echo $this->Form->create($author, ['type' => 'file','role' => 'form']); ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('status');
            echo $this->Form->input('title');
            echo $this->Form->input('image');
            echo $this->Form->input('description');
            echo $this->Form->input('slug');
            echo $this->Form->input('visualization');
          ?>
          </div>
          <?php echo $this->element('Seos/add') ?>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Salvar')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

