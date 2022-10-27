<section class="content-header">
  <h1>
    Article
    <small><?= __('Edit') ?></small>
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
          <?php echo $this->Form->create($article, ['type' => 'file','role' => 'form']); ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('category_id', ['options' => $categories, 'empty' => true]);
            echo $this->Form->input('author_id', ['options' => $authors, 'empty' => true]);
            echo $this->Form->input('status');
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('image');
            echo $this->Form->input('slug');
            echo $this->Form->input('visualization');
            echo $this->Form->input('publication_date');
            echo $this->Form->input('type');
            echo $this->Form->input('url_external');
            echo $this->Form->input('url_text');
            echo $this->Form->input('banners._ids', ['options' => $banners]);
            echo $this->Form->input('tags._ids', ['options' => $tags]);
          ?>
          </div>
          <?php echo $this->element('Seos/edit') ?>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Salvar')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

